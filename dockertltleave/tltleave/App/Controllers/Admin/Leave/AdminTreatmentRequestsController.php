<?php

namespace App\Controllers\Admin\Leave;

use App\Controllers\Common\AbstractController;

class AdminTreatmentRequestsController extends AbstractController {



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



}