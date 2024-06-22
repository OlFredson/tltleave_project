<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;
use App\Controllers\SecurityController;
use App\Models\Manager\Team\TeamManager;
use App\Models\Manager\User\UserManager;

class AdminController extends AbstractController
{
    private SecurityController $security;
    private UserManager $userManager;
    private TeamManager $teamManager;

    public function __construct()
    {
        // Initialise le contrôleur de sécurité.
        $this->security = new SecurityController();
        $this->userManager = new UserManager();
        $this->teamManager = new TeamManager();
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
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue de gestion des utilisateurs avec le titre et la liste des utilisateurs.
        $this->render('Admin/UserManagement.view', [
            'title' => $title,
            'users' => $users,
            'csrf_token' => $token
        ]);
    }

    /**
     * Affiche la page d'ajout des utilisateurs.
     * Génére un token CSRF pour sécuriser le formulaire.
     */
    public function deleteUser(): void
    {
        $title = "Gestion des utilisateurs";
        // Génère un token CSRF pour sécuriser le formulaire.
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue d'ajout des utilisateurs avec le titre et le token CSRF.
        $userManager = new UserManager();
        $users = $userManager->getAllUsers();
        $this->render("Admin/UserManagement.view", [
            'title' => $title,
            'users' => $users,
            'csrf_token' => $token
        ]);
    }

    /**
     * Affiche le statut des demandes.
     */
    public function adminStatusRequests() :void {
        $title = 'Statut des demandes';
        // Rendu de la vue de l'historique du statut des demandes avec le titre.
        $this->render("Admin/AdminHistoricStatusRequests.view", ['title' => $title]);
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
        $teams = $this->teamManager->getAllTeamNames();
        $this->render("Admin/AddUsers.view", [
            'title' => $title,
            'csrf_token' => $token,
            'teams' => $teams
        ]);
    }

    /**
     * Affiche la page d'ajout des utilisateurs.
     * Génére un token CSRF pour sécuriser le formulaire.
     */
    public function addLeave(): void
    {
        $title = "Demande de congés";
        // Génère un token CSRF pour sécuriser le formulaire.
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue d'ajout des utilisateurs avec le titre et le token CSRF.
        $this->render("Admin/AdminLeaveRequests.view", [
            'title' => $title,
            'csrf_token' => $token
        ]);
    }
}
