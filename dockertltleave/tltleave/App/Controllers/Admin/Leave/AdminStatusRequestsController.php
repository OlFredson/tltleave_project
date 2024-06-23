<?php

namespace App\Controllers\Admin\Leave;

use App\Controllers\Common\AbstractController;

class AdminStatusRequestsController extends AbstractController {



/**
     * Affiche le statut des demandes.
     */
    public function adminStatusRequests() :void {
        $title = 'Statut des demandes';
        // Rendu de la vue de l'historique du statut des demandes avec le titre.
        $this->render("Admin/AdminHistoricStatusRequests.view", ['title' => $title]);
    }


}