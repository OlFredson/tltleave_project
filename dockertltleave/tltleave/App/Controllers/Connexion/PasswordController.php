<?php

namespace App\Controllers\Connexion;

use App\Controllers\AbstractController;

class PasswordController extends AbstractController
{
    /**
     * Affiche la page de demande de réinitialisation du mot de passe.
     */
    public function passwordForgot(): void
    {
        $title = "Mot de passe oublié";
        // Rendu de la vue pour la demande de réinitialisation de mot de passe avec le titre.
        $this->render("Connexion/PasswordForgot.view", ['title' => $title]);
    }

    /**
     * Affiche la page de réinitialisation du mot de passe.
     */
    public function resetPassword(): void
    {
        $title = "Réinitialisation du mot de passe";
        // Rendu de la vue pour la réinitialisation de mot de passe avec le titre.
        $this->render("Connexion/ResetPassword.view", ['title' => $title]);
    }
}