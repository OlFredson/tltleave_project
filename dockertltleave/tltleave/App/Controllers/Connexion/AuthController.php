<?php

namespace App\Controllers\Connexion;

use App\Controllers\Common\AbstractController;
use App\Controllers\Common\DisplayController;
use App\Controllers\Common\SecurityController;
use App\Models\Manager\Admin\UserManagement\AdminUserManagementManager;
use App\Models\Manager\Connexion\AuthManager;

class AuthController extends AbstractController {

    private SecurityController $security;
    private AdminUserManagementManager $userManager;
    private AuthManager $userAuth;

    public function __construct()
    {
        $this->security = new SecurityController();
        $this->userManager = new AdminUserManagementManager();
        $this->userAuth = new AuthManager();
    }


    public function authentication(): void
    {
        $title = "Authentification";
        $this->render("Connexion/Login.view", ['title' => $title]);
    }

    public function authValidation(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $userName = $_POST['userName'];
            $userPassword = $_POST['userPassword'];

            if ($userName && $userPassword) {
                $valid = $this->userAuth->verifyPassword($userName, $userPassword);

                if ($valid) {
                    session_regenerate_id();
                    $user = $this->userManager->getUserByIdEmployee($userName);
                    $_SESSION['user'] = $user;

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
                    ob_end_clean();
                    $this->redirecToRoute("authentication");
                }
            } else {
                DisplayController::messageAlert("Identifiants non fournis", DisplayController::ROUGE);
                ob_end_clean();
                $this->redirecToRoute("authentication");
            }
        }
    }

    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        $this->redirecToRoute("authentication");
    }

    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }

    public function isAdmin() {
        return isset($_SESSION['user']['userProfile']) && $_SESSION['user']['userProfile'] === 'Administrateur';
    }
}
