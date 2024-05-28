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
        echo 'dans fonction authvalidation <br>';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'dans if du fonction authvalidation <br>';
            $idEmployee = $_POST['idEmployee'];
            $userPassword = $_POST['userPassword'];

            if ($idEmployee && $userPassword) {
                $valid = $this->userManager->verifyPassword($idEmployee, $userPassword);
                if ($valid) {
                    echo 'dans if(valid) du fonction authvalidation br>';
                    session_regenerate_id();
                    $user = $this->userManager->getUserByIdEmployee($idEmployee);
                    $_SESSION['user'] = $user;

                    if ($user['userProfile'] === "Administrateur") {
                        echo 'dans if(userProfile) du fonction authvalidation <br>';
                        $this->redirecToRoute("dashboard");
                    } elseif ($user['userProfile'] === 'Employé') {
                        $this->redirecToRoute("dashboardemployee");
                    } else {
                        DisplayController::messageAlert("Role utlisateur non reconnu", DisplayController::ROUGE);
                    }
                }
                $this->redirecToRoute("authentification");
            } else {
                DisplayController::messageAlert("Identifiants incorrects", DisplayController::ROUGE);
                $this->redirecToRoute("addUsers");
            }
        } else {

        }
    }
}