<?php

namespace App\Controllers\Connexion;

use App\Controllers\AbstractController;
use App\Controllers\DisplayController;
use App\Controllers\SecurityController;
use App\Models\Manager\UserManager;

class AuthController extends AbstractController //Responsable de l'authentification (connexion, déconnexion)
{

    private SecurityController $security;
    private UserManager $userManager;

    public function __construct()
    {
        $this->security = new SecurityController;
        $this->userManager = new UserManager();
    }
    public function authentication(): void
    {
        $title = "Authentification";
        $this->render("Connexion/Login.view", ['title' => $title]);
    }

    public function authValidation()
    {
        // Assurez-vous que la session n'a pas déjà démarré avant de lancer une nouvelle session
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Régénérez l'ID de session après avoir vérifié les identifiants de l'utilisateur
    session_regenerate_id();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idEmployee = $_POST['idEmployee'];
        $userPassword = $_POST['userPassword'];

        echo "ID Employee: $idEmployee<br>";
        echo "Password: $userPassword<br>";

        if ($idEmployee && $userPassword) {
            $valid = $this->userManager->verifyPassword($idEmployee, $userPassword);
            echo "Juste avant la vérification de mot de passe<br>";
            
            if ($valid) {
                
                $user = $this->userManager->getUserByIdEmployee($idEmployee);
                $_SESSION['user'] = $user;

                if ($user['userProfile'] === "Administrateur") {
                    $this->redirecToRoute("dashboard");
                } elseif ($user['userProfile'] === 'Employé') {
                    $this->redirecToRoute("dashboardemployee");
                } else {
                    DisplayController::messageAlert("Rôle utilisateur non reconnu", DisplayController::ROUGE);
                }
            } else {
                DisplayController::messageAlert("Identifiants incorrects", DisplayController::ROUGE);
                $this->redirecToRoute("authentication");
            }
        } else {
            DisplayController::messageAlert("Identifiants non fournis", DisplayController::ROUGE);
            $this->redirecToRoute("authentication");
        }
    }
}

    public function logout()
    {
        session_start();
        session_destroy(); // Détruit toutes les données de la session
        // Rediriger vers la page de connexion
        $this->redirecToRoute("authentication");
    }

    public function isAuthenticated()
    {
        session_start();
        return isset($_SESSION['user']); // Vérifie si l'utilisateur est connecté
    }
}