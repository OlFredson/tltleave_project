<?php

namespace App\Models\Entity;

class Right {
    private int $employeeId;
    private int $rightId;

    public function __construct (
        int $employeeId,
        int $rightId
    ){
        $this->setEmployeeId($employeeId);
        $this->setRightId($rightId);
    }

    /**
     * @return int
     */
    public function getEmployeeId() : int {
        return $this->employeeId;
    }

    /**
     * @param int $employeeId
     */
    public function setEmployeeId (int $employeeId) : void {
        $this->employeeId = $employeeId;
    }

    /**
     * @return int
     */
    public function getRightId() : int {
        return $this->rightId;
    }

    /**
     * @param int $rightId
     */
    public function setRightId(int $rightId) {
        $this->rightId = $rightId;
    }
}
