<?php

namespace App\Controllers\Employee\Leave;

use App\Controllers\Common\AbstractController;

class EmployeeHistoricStatusController extends AbstractController {

/**
     * Affiche le statut des demandes des employés.
     */
    public function statusRequests() :void {
        $title = 'Statut des demandes';
        // Rendu de la vue de l'historique du statut des demandes avec le titre.
        $this->render("Employee/EmployeeHistoricStatusRequests.view.view", ['title' => $title]);
    }
}

