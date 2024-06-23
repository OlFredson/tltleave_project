<?php

namespace App\Controllers\Admin\calendar;

use App\Controllers\Common\AbstractController;

class AdminCalendarController extends AbstractController{

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

}