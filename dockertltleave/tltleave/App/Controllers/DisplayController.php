<?php

namespace App\Controllers;

class DisplayController
{
    // Définition des constantes pour les types d'alerte
    const ROUGE = 'danger';
    const ORANGE = 'warning';
    const VERTE = 'success';

    /**
     * Stocke un message d'alerte dans la session.
     * @param string $message Le message à afficher.
     * @param string $type Le type d'alerte (danger, warning, success).
     */
    public static function messageAlert(string $message, string $type): void
    {
        // Stocke le message et le type d'alerte dans la session.
        $_SESSION['alert'] = [
            'type' => $type,
            'message' => $message
        ];
    }
}
