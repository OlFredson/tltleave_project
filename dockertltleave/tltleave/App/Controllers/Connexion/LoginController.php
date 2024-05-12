<?php

/*namespace App\Controllers\Connexion;*/

require_once "../App/Controllers/MethodRender.php";

class LoginController {
    private $methodRender;

    public function __construct(){
        $this->methodRender= new MethodRender();
    }

    public function authentication(): void{
        $title="Connexion";
        $this->methodRender->render("Connexion/Login.view",['title'=>$title]);
    }

    public function passwordForgot(): void{
        $title="Mot de passe oublié";
        $this->methodRender->render("Connexion/PasswordForgot.view",['title'=>$title]);
    }

    public function resetPassword(): void{
        $title="Réinitialisation du mot de passe";
        $this->methodRender->render("Connexion/ResetPassword.view",['title'=>$title]);
    }
}
