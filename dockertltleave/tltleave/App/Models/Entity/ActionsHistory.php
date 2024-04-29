<?php

namespace src\app\Entity\Models;

use DateTime;

class ActionHistory {
    private int $actionId;
    private string $actionType;
    private DateTime $actionDate;


    public function __construct(
        int $actionId,
        string $actionType,
        string $actionDate
    )
    {
        $this->setActionId($actionId);
        $this->setActionType($actionType);
        $this->setActionDate($actionDate);
    }

    /**
    * @return int
    */
    public function getActionId () : int {
        return $this->actionId;
    }

    /**
     * @param int $actionId
     */
    public function setActionId (int $actionId): void {
        $this->actionId = $actionId;
    }

    /**
     * @return string
     */
    public function getActionType() : string {
        return $this->actionType;
    }

    /**
     * @param string $actionType
     */
    public function setActionType(string $actionType) : void {
        $this->actionType = $actionType;
    }

    /**
     * @return DateTime
     */
    public function getActionDate() : DateTime {
        return $this->actionDate;
    }

    /**
     * @param string $actionDate
     */
    public function setActionDate(string $actionDate) : void {
        $this->actionDate = DateTime::createFromFormat('Y-m-d H:i', $actionDate);
    }

    public function getFormatActionDate() : string {
            return $this->actionDate->format('Y-m-d H:i');
        }
}