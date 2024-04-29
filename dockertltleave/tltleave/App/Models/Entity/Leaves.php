<?php

namespace src\app\Entity\Models;

use DateTime;

class Leave {
    private int $leaveId;
    private DateTime $beginDate;
    private DateTime $endDate;
    private string $status;
    private int $employeeId;
    private int $leaveTypeId;

    public function __construct(
        int $leaveId,
        string $beginDate,
        string $endDate,
        string $status,
        int $employeeId,
        int $leaveTypeId
    ) {
        $this->setLeaveId($leaveId);
        $this->setBeginDate($beginDate);
        $this->setEndDate($endDate);
        $this->setStatus($status);
        $this->setEmployeeId($employeeId);
        $this->setLeaveTypeId($leaveTypeId);
    }

    /**
     * @return int
     */
    public function getLeaveId() : int {
        return $this->leaveId;
    }

    /**
     * @param int $leaveId
     */
    public function setLeaveId(int $leaveId) {
        $this->leaveId = $leaveId;
    }

    /**
     * @return DateTime
     */
    public function getBeginDate() : DateTime {
        return $this->beginDate;
    }

    /**
     * @param string $beginDate
     */
    public function setBeginDate(string $beginDate) : void {
        $this->beginDate = DateTime::createFromFormat('Y-m-d H:i',$beginDate);
    }


    /**
     * @return DateTime
     */
    public function getEndDate() : DateTime {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate(string $endDate) :void {
        $this->endDate = DateTime::createFromFormat('Y-m-d H:i',$endDate);
    }

    /**
     * @return string
     */
    public function getStatus() : string {
        return $this->status;
    }

    /**
     * @param string $status
     */

    public function setStatus(string $status) : void {
        $this->status = $status;
    }

    /**
     * @return
     */

    public function getEmployeeId() : int {
        return $this->employeeId;
    }

    /**
     * @param int $employeeID
     */

    public function setEmployeeId(int $employeeId) : void {
        $this->employeeId= $employeeId;
    }

    /**
     * @return int
     */

    public function getLeaveTypeId() : int {
        return $this->leaveTypeId;
    }

    /**
     * @param int $leavetypeId
     */

    public function setLeaveTypeId(int $leaveTypeId) : void {
        $this->leaveTypeId = $leaveTypeId;
    }
}