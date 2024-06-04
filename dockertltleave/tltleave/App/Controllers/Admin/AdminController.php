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
        $this->security = new SecurityController();
    }

    public function dashboard(): void
    {
        $title = "Dashboard";
        $this->render("Admin/AdminDashboard.view", [
            'title' => $title
        ]);
    }

    public function userManagement(): void
    {
        $title = "Gestion des utilisateurs";
        $userManager = new UserManager();
        $users = $userManager->getAllUsers();
        $this->render('Admin/UserManagement.view', ['title' => $title, 'users' => $users]);
    }

    public function treatmentRequests(): void
    {
        $title = "Traitement des demandes";
        $this->render("Admin/TreatmentRequests.view", [
            'title' => $title
        ]);
    }

    public function statistics(): void
    {
        $title = "Statistiques";
        $this->render("Admin/Statistics.view", [
            'title' => $title
        ]);
    }

    public function calendar(): void
    {
        $title = "Calendrier";
        $this->render("Admin/Calendar.view", [
            'title' => $title
        ]);
    }

    public function addUsers(): void
    {
        $title = "Ajout utilisateurs";
        $token = $this->security->generateCsrfToken();
        $this->render("Admin/AddUsers.view", [
            'title' => $title,
            'token' => $token
        ]);
    }
}