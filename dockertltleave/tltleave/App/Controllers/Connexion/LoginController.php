<?php

namespace App\Controllers\Connexion;
use App\Controllers\AbstractController;
use App\Controllers\SecurityController;

class LoginController extends AbstractController {
    private SecurityController $security;

    public function __construct() {
        $this->security = new SecurityController();
    }

    public function authentication(): void{
        $title="Connexion";
        $this->render("Connexion/Login.view",['title'=>$title]);
    }

    public function passwordForgot(): void{
        $title="Mot de passe oublié";
        $this->render("Connexion/PasswordForgot.view",['title'=>$title]);
    }

    public function resetPassword(): void{
        $title="Réinitialisation du mot de passe";
        $this->render("Connexion/ResetPassword.view",['title'=>$title]);
    }

    public function connexionValidation() : void {
        $employeeId= $this->security->cleanInput($_POST['employeeId']);
        
    }
    
}
