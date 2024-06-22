<?php

namespace App\Models\Entity;

use DateTime;

class Leave {
    private int $leaveId;
    private ?string $leaveType;
    private ?DateTime $beginDate;
    /*private ?string $beginTime;*/
    private ?DateTime $endDate;
    /*private ?string $endTime;*/
    private ?int $nbrDays;
    private string $commentary;
    /*private string $status;*/
    private int $employeeId;
    private int $leaveTypeId;

    public function __construct($leaveType,$beginDate,/*$beginTime,*/$endDate,/*$endTime,*/$nbrDays) {
        $this->setLeaveType($leaveType);
        $this->setBeginDate($beginDate);
        /*$this->setBeginDate($beginTime);*/
        $this->setEndDate($endDate);
        /*$this->setBeginDate($endTime);*/
        $this->setNbrDays($nbrDays);
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
     * @return string
     */
    public function getLeaveType() : string {
        return $this->leaveType;
    }

    /**
     * @param string $leaveType
     */
    public function setLeaveType(string $leaveType) : void {
        $this->leaveType = $leaveType;
    }

    /**
     * @return DateTime
     */
    public function getBeginDate() : DateTime {
        return $this->beginDate;
    }

    /**
     * @param DateTime $beginDate
     */
    public function setBeginDate(?DateTime $beginDate) : void {
        $this->beginDate = $beginDate;
    }

/*
    /**
     * @return string
     */
/*
    public function getBeginTime() : string {
        return $this->beginTime;
    }

    /**
     * @param string $beginTime
     */
/*
    public function setBeginTime(string $beginTime) : void {
        $this->beginTime = $beginTime;
    }
*/

    /**
     * @return DateTime
     */
    public function getEndDate() : DateTime {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     */
    public function setEndDate(?DateTime $endDate) :void {
        $this->endDate = $endDate;
    }

/*
    /**
     * @return string
     */
/*
    public function getEndTime() : string {
        return $this->endTime;
    }
/*
    /**
     * @param string $endTime
     */
/*
    public function setEndTime(string $endTime) : void {
        $this->endTime = $endTime;
    }
*/

    /**
     * @return int
     */
    public function getNbrDays() : int {
        return $this->nbrDays;
    }

    /**
     * @param int $nbrDays
     */
    public function setNbrDays(int $nbrDays) {
        $this->nbrDays = $nbrDays;
    }

    /**
     * @return string
     */
    public function getCommentary() : string {
        return $this->commentary;
    }

    /**
     * @param string $commentary
     */

    public function setCommentary(string $commentary) : void {
        $this->commentary = $commentary;
    }

/*
    /**
     * @return string
     */
    /*
    public function getStatus() : string {
        return $this->status;
    }
*/
/*
    /**
     * @param string $status
     */
/*
    public function setStatus(string $status) : void {
        $this->status = $status;
    }*/

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