<?php

namespace App\Controllers\Connexion;

use App\Controllers\AbstractController;
use App\Controllers\DisplayController;
use App\Controllers\SecurityController;
use App\Models\Manager\UserManager;

class AuthController extends AbstractController // Responsable de l'authentification (connexion, déconnexion)
{
    private SecurityController $security;
    private UserManager $userManager;
    public function __construct()
    {
        $this->security = new SecurityController();
        $this->userManager = new UserManager();
    }

    public function authentication(): void
    {
        $title = "Authentification";
        $this->render("Connexion/Login.view", ['title' => $title]);
    }

    public function authValidation(): void
    {
        ob_start(); // Commencer la capture de la sortie

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $idEmployee = $_POST['idEmployee'];
            $userPassword = $_POST['userPassword'];

            // Utiliser error_log pour enregistrer les messages de débogage
            error_log("ID Employee: $idEmployee");
            error_log("Password: $userPassword");
            echo 'dans if ($_SERVER[REQUEST_METHOD)';

            if ($idEmployee && $userPassword) {
                $valid = $this->userManager->verifyPassword($idEmployee, $userPassword);
                error_log("Juste avant la vérification de mot de passe");
                echo 'dans if ($idEmployee && $userPassword)';

                if ($valid) {
                    session_regenerate_id(); // Régénérer l'ID de session après une connexion réussie
                    $user = $this->userManager->getUserByIdEmployee($idEmployee);
                    $_SESSION['user'] = $user;
                    echo 'dans if ($valid)';

                    ob_end_clean(); // Nettoyer la sortie tamponnée avant la redirection

                    if ($user['userProfile'] === "Administrateur") {
                        $this->redirecToRoute("dashboard");
                        echo 'dans if ($user[userProfile] === "Administrateur")';

                    } elseif ($user['userProfile'] === 'Employé') {
                        $this->redirecToRoute("dashboardemployee");
                        echo 'dans elseif ($user[userProfile] === Employé)';

                    } else {
                        DisplayController::messageAlert("Rôle utilisateur non reconnu", DisplayController::ROUGE);
                        $this->redirecToRoute("authentication");
                        echo 'dans else';
                    }
                } else {
                    DisplayController::messageAlert("Identifiants incorrects", DisplayController::ROUGE);
                    ob_end_clean(); // Nettoyer la sortie tamponnée avant la redirection
                    $this->redirecToRoute("authentication");
                    echo 'dans le deuxieme else apres ob_end_clean';
                }
            } else {
                DisplayController::messageAlert("Identifiants non fournis", DisplayController::ROUGE);
                ob_end_clean(); // Nettoyer la sortie tamponnée avant la redirection
                $this->redirecToRoute("authentication");
                echo 'dans le troisième else apres ob_end_clean';
            }
        }

        ob_end_clean(); // Nettoyer la sortie tamponnée
    }

    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy(); // Détruit toutes les données de la session
        $this->redirecToRoute("authentication");
    }

    public function isAuthenticated(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['user']); // Vérifie si l'utilisateur est connecté
    }
}
