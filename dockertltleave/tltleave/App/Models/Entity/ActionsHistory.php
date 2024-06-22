<?php

namespace App\Models\Entity;

use DateTime;

class ActionHistory {
    // Propriétés de la classe ActionHistory
    private int $actionId;
    private string $actionType;
    private DateTime $actionDate;

    // Constructeur de la classe ActionHistory
    public function __construct(
        int $actionId,
        string $actionType,
        string $actionDate
    )
    {
        // Appel des méthodes setter pour initialiser les propriétés de la classe
        $this->setActionId($actionId);
        $this->setActionType($actionType);
        $this->setActionDate($actionDate);
    }

    /**
     * Méthode pour récupérer l'ID de l'action.
     * @return int L'ID de l'action.
     */
    public function getActionId () : int {
        return $this->actionId;
    }

    /**
     * Méthode pour définir l'ID de l'action.
     * @param int $actionId L'ID de l'action.
     */
    public function setActionId (int $actionId): void {
        $this->actionId = $actionId;
    }

    /**
     * Méthode pour récupérer le type d'action.
     * @return string Le type d'action.
     */
    public function getActionType() : string {
        return $this->actionType;
    }

    /**
     * Méthode pour définir le type d'action.
     * @param string $actionType Le type d'action.
     */
    public function setActionType(string $actionType) : void {
        $this->actionType = $actionType;
    }

    /**
     * Méthode pour récupérer la date de l'action.
     * @return DateTime La date de l'action.
     */
    public function getActionDate() : DateTime {
        return $this->actionDate;
    }

    /**
     * Méthode pour définir la date de l'action.
     * @param string $actionDate La date de l'action.
     */
    public function setActionDate(string $actionDate) : void {
        // Convertit la chaîne de date au format 'Y-m-d H:i' en objet DateTime
        $this->actionDate = DateTime::createFromFormat('Y-m-d H:i', $actionDate);
    }

    /**
     * Méthode pour récupérer la date de l'action formatée.
     * @return string La date de l'action formatée.
     */
    public function getFormatActionDate() : string {
        return $this->actionDate->format('Y-m-d H:i');
    }
}
