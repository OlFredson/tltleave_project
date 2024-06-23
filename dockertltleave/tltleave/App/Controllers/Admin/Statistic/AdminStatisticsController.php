<?php

namespace App\Controllers\Admin\Statistic;

use App\Controllers\Common\AbstractController;

class  AdminStatisticsController extends AbstractController {

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

}