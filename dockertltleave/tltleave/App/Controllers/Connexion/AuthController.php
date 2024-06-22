<?php

namespace App\Controllers\Connexion;

use App\Controllers\AbstractController;
use App\Controllers\DisplayController;
use App\Controllers\SecurityController;
use App\Models\Manager\Connexion\AuthManager;
use App\Models\Manager\User\UserManager;

// Classe responsable de l'authentification (connexion, déconnexion)
class AuthController extends AbstractController
{
    private SecurityController $security;
    private UserManager $userManager;
    private AuthManager $userAuth;

    public function __construct()
    {
        // Initialise le contrôleur de sécurité et le gestionnaire d'utilisateurs.
        $this->security = new SecurityController();
        $this->userManager = new UserManager();
        $this->userAuth = new AuthManager();
    }

    /**
     * Affiche la page d'authentification.
     */
    public function authentication(): void
    {
        $title = "Authentification";
        // Rendu de la vue d'authentification avec le titre.
        $this->render("Connexion/Login.view", ['title' => $title]);
    }

    /**
     * Valide les informations d'authentification fournies par l'utilisateur.
     */
    public function authValidation(): void
    {
        // Vérifie si la méthode de requête est POST (soumission du formulaire).
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Démarre la session si elle n'est pas déjà démarrée.
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $idEmployee = $_POST['idEmployee'];
            $userPassword = $_POST['userPassword'];

            // Vérifie si les identifiants sont fournis.
            if ($idEmployee && $userPassword) {
                // Valide le mot de passe de l'utilisateur.
                $valid = $this->userAuth->verifyPassword($idEmployee, $userPassword);

                if ($valid) {
                    // Régénère l'ID de session après une connexion réussie pour des raisons de sécurité.
                    session_regenerate_id();
                    // Récupère les informations de l'utilisateur.
                    $user = $this->userManager->getUserByIdEmployee($idEmployee);
                    // Stocke les informations de l'utilisateur dans la session.
                    $_SESSION['user'] = $user;

                    // Redirige en fonction du profil de l'utilisateur.
                    if ($user['userProfile'] === "Administrateur") {
                        $this->redirecToRoute("dashboard");
                    } elseif ($user['userProfile'] === 'Employé') {
                        $this->redirecToRoute("dashboardemployee");
                    } else {
                        DisplayController::messageAlert("Rôle utilisateur non reconnu", DisplayController::ROUGE);
                        $this->redirecToRoute("authentication");
                    }

                } else {
                    DisplayController::messageAlert("Identifiants incorrects", DisplayController::ROUGE);
                    // Nettoie la sortie tamponnée avant la redirection.
                    ob_end_clean();
                    $this->redirecToRoute("authentication");
                }
            } else {
                DisplayController::messageAlert("Identifiants non fournis", DisplayController::ROUGE);
                // Nettoie la sortie tamponnée avant la redirection.
                ob_end_clean();
                $this->redirecToRoute("authentication");
            }
        }
    }

    /**
     * Déconnecte l'utilisateur en détruisant la session.
     */
    public function logout(): void
    {
        // Démarre la session si elle n'est pas déjà démarrée.
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // Détruit toutes les données de la session.
        session_destroy();
        // Redirige vers la page d'authentification.
        $this->redirecToRoute("authentication");
    }

    /**
     * Vérifie si l'utilisateur est authentifié.
     */
   // Vérifie si l'utilisateur est connecté
    public function isAuthenticated() {
        return isset($_SESSION['id_employee']);
    }

// Vérifie si l'utilisateur connecté est un administrateur
public function isAdmin() {
    // Supposons que le rôle de l'utilisateur est stocké dans la session
    return isset($_SESSION['user_profile']) && $_SESSION['user_profile'] === 'admin';
}

}
