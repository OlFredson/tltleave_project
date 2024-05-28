<?php
namespace App\Controllers\Connexion;

use App\Controllers\AbstractController;


class PasswordController extends AbstractController
{
    public function passwordForgot(): void
    {
        $title = "Mot de passe oublié";
        $this->render("Connexion/PasswordForgot.view", ['title' => $title]);
    }

    public function resetPassword(): void
    {
        $title = "Réinitialisation du mot de passe";
        $this->render("Connexion/ResetPassword.view", ['title' => $title]);
    }
}