<?php

namespace App\Controllers\Admin\Dashboard;

use App\Controllers\Common\AbstractController;

class AdminDashboardController extends AbstractController {

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

}