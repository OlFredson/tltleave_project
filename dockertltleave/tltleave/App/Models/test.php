<?php

namespace src\app\Entity\Models;

use DateTime;

class ActionHistory {
    private int $actionId;
    private string $action;
    private DateTime $actionDate;


    public function __construct(
        $actionId,
        $action,
        $actionDate
    )
    {
        $this->setActionId($actionId);
        $this->setAction($action);
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
    public function getAction() : string {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction (string $action) : void {
        $this->action = $action;
    }

    /**
     * @return DateTime
     */
    public function getActionDate() : DateTime {
        return $this-> actionDate;
    }

    /**
     * @param DateTime $actionDate
     */
    public function setActionDate (string $actionDate) : void {
        $this->actionDate = $actionDate;
    }

    public function getFormatActionDate() : string {
        return $this->actionDate->format('Y-m-d H:i:s');
    }
}