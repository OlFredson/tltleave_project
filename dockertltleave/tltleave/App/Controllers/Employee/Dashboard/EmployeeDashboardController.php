<?php

namespace App\Controllers\Employee\Dashboard;

use App\Controllers\Common\AbstractController;

class EmployeeDashboardController extends AbstractController {


    /**
     * Affiche le tableau de bord des employés.
     */
    public function employeeDashboard() :void {
        $title = "Dashboard";
        // Rendu de la vue du tableau de bord des employés avec le titre.
        $this->render("Employee/EmployeeDashboard.view", ['title' => $title]);
    }

}