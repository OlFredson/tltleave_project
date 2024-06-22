<?php

namespace App\Models\Entity;

class Realize {
    private int $employeeId;
    private int $actionId;

    public function __construct(
        int $employeeId,
        int $actionId
    ){
        $this->setEmployeeId($employeeId);
        $this->setActionId($actionId);
    }

    /**
     * @return int
     */
    public function getEmployeeId(): int {
        return $this->employeeId;
    }

    /**
     * @param int $employeeId
     */
    public function setEmployeeId(int $employeeId): void {
        $this->employeeId = $employeeId;
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
}