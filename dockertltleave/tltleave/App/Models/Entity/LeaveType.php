<?php

namespace src\app\Entity\Models;

class LeaveType {
    private int $leaveTypeId;
    private string $leaveTypeName;
    private float $numberPerYear;

    public function __construt (
        int $leaveTypeId,
        string $leaveTypeName,
        float $numberPerYear
    ) {
        $this->setLeaveTypeId($leaveTypeId);
        $this->setLeaveTypeName($leaveTypeName);
        $this->setNumberPerYear($numberPerYear);
    }

    /**
     * @return int
     */
    public function getLeaveTypeId() : int {
        return $this->leaveTypeId;
    }

    /**
     * @param int $leaveTypeId
     */
    public function setLeaveTypeId(int $leaveTypeId) : void {
        $this->leaveTypeId = $leaveTypeId;
    }

    /**
     * @return string 
     */
    public function getLeaveTypeName() : string {
        return $this->leaveTypeName;
    }

    /**
     * @param string $leaveTypeName
     */
    public function setLeaveTypeName(string $leaveTypeName) {
        $this->leaveTypeName = $leaveTypeName;
    }

    /**
     * @return float
     */
    public function getNumberPerYear() : float {
        return $this->numberPerYear;
    }

    /**
     * @param float $maxnumberPerYear
     */
    public function setNumberPerYear(float $numberPerYear) {
        $this->numberPerYear = $numberPerYear;
    }
}