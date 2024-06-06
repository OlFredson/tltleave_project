<?php

namespace App\Controllers\Employee;

use App\Controllers\AbstractController;

class EmployeeController extends AbstractController {

    /**
     * Affiche le tableau de bord des employés.
     */
    public function dashboardEmployee() :void {
        $title = "Dashboard";
        // Rendu de la vue du tableau de bord des employés avec le titre.
        $this->render("Employee/EmployeeDashboard.view", ['title' => $title]);
    }

    /**
     * Affiche le statut des demandes des employés.
     */
    public function statusRequests() :void {
        $title = 'Statut des demandes';
        // Rendu de la vue de l'historique du statut des demandes avec le titre.
        $this->render("Employee/HistoricStatusRequests.view", ['title' => $title]);
    }
}
