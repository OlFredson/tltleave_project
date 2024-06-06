<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;
use App\Controllers\SecurityController;
use App\Models\Manager\UserManager;

class AdminController extends AbstractController
{
    private SecurityController $security;

    public function __construct()
    {
        // Initialise le contrôleur de sécurité.
        $this->security = new SecurityController();
    }

    /**
     * Affiche le tableau de bord de l'administration.
     */
    public function dashboard(): void
    {
        $title = "Dashboard";
        // Rendu de la vue du tableau de bord avec le titre.
        $this->render("Admin/AdminDashboard.view", [
            'title' => $title
        ]);
    }

    /**
     * Affiche la gestion des utilisateurs.
     */
    public function userManagement(): void
    {
        $title = "Gestion des utilisateurs";
        // Crée une instance de UserManager pour récupérer tous les utilisateurs.
        $userManager = new UserManager();
        $users = $userManager->getAllUsers();
        // Rendu de la vue de gestion des utilisateurs avec le titre et la liste des utilisateurs.
        $this->render('Admin/UserManagement.view', ['title' => $title, 'users' => $users]);
    }

    /**
     * Affiche la page de traitement des demandes.
     */
    public function treatmentRequests(): void
    {
        $title = "Traitement des demandes";
        // Rendu de la vue de traitement des demandes avec le titre.
        $this->render("Admin/TreatmentRequests.view", [
            'title' => $title
        ]);
    }

    /**
     * Affiche la page des statistiques.
     */
    public function statistics(): void
    {
        $title = "Statistiques";
        // Rendu de la vue des statistiques avec le titre.
        $this->render("Admin/Statistics.view", [
            'title' => $title
        ]);
    }

    /**
     * Affiche le calendrier.
     */
    public function calendar(): void
    {
        $title = "Calendrier";
        // Rendu de la vue du calendrier avec le titre.
        $this->render("Admin/Calendar.view", [
            'title' => $title
        ]);
    }

    /**
     * Affiche la page d'ajout des utilisateurs.
     * Génére un token CSRF pour sécuriser le formulaire.
     */
    public function addUsers(): void
    {
        $title = "Ajout utilisateurs";
        // Génère un token CSRF pour sécuriser le formulaire.
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue d'ajout des utilisateurs avec le titre et le token CSRF.
        $this->render("Admin/AddUsers.view", [
            'title' => $title,
            'token' => $token
        ]);
    }
}
