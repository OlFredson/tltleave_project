<?php

namespace App\Models\Entity;

class LEaveStatistics {
    private int $statisticsId;
    private float $totalNumberLeave;
    private float $numberLeaveTaken;
    private float $numberLeaveRemaining;
    private float $totalNumberRtt;
    private float $numberRttTaken;
    private float $numberRttRemaining;
    private float $employeeId;

    public function __construct (
        int $statisticsId,
        float $totalNumberLeave,
        float $numberLeaveTaken,
        float $numberLeaveRemaining,
        float $totalNumberRtt,
        float $numberRttTaken,
        float $numberRttRemaining,
        float $employeeId
    ){
        $this->setStatisticsId($statisticsId);
        $this->setTotalNumberLeave($totalNumberLeave);
        $this->setNumberLeaveTaken($numberLeaveTaken);
        $this->setNumberLeaveRemaining($numberLeaveRemaining);
        $this->setTotalNumberRtt($totalNumberRtt);
        $this->setNumberRttTaken($numberRttTaken);
        $this->setNumberRttRemaining($numberRttRemaining);
        $this->setEmployeeId($employeeId);
    }

    /**
     * $return int
     */
    public function getStatisticsId() : int {
        return $this->statisticsId;
    }

    /**
     * @param float $statisticsId
     */
    public function setStatisticsId(int $statisticsId) : void {
        $this->statisticsId = $statisticsId;
    }

    /**
     * @return float
     */
    public function getTotalNumberLeave() : float {
        return $this->totalNumberLeave;
    }

    /**
     * @param float $totalNumberLeave
     */
    public function setTotalNumberLeave(float $totalNumberLeave) : void {
        $this->totalNumberLeave =$totalNumberLeave;
    }

    /**
     * @return float
     */
    public function getNumberLeaveTaken() : float {
        return $this->numberLeaveTaken;
    }

    /**
     * @param float $numberLeaveTaken
     */
    public function setNumberLeaveTaken(float $numberLeaveTaken) : void {
        $this->numberLeaveTaken = $numberLeaveTaken;
    }

    /**
     * @return float
     */
    public function getNumberLeaveRemaining() : float {
        return $this->numberLeaveRemaining;
    }

    /**
     * @param float $numberLeaveRemaining
     */
    public function setNumberLeaveRemaining(float $numberLeaveRemaining) : void{
        $this->numberLeaveRemaining = $numberLeaveRemaining;
    }

    /**
     * @return float
     */
    public function getTotalNumberRtt() : float {
        return $this->totalNumberRtt;
    }

    /**
     * @param float $totalNumberRtt
     */
    public function setTotalNumberRtt(float $totalNumberRtt)  : void{
        $this->totalNumberRtt = $totalNumberRtt;
    }

    /**
     * @return float
     */
    public function getNumberRttTaken() : float {
        return $this->numberRttTaken;
    }

    /**
     * @param float $numberRttTaken
     */
    public function setNumberRttTaken(float $numberRttTaken) : void {
        $this->numberRttTaken = $numberRttTaken;
    }
    /**
     * @return float
     */
    public function getNumberRttRemaining() : float {
        return $this->numberRttRemaining;
    }

    /**
     * @param float $numberRttRemaining
     */
    public function setNumberRttRemaining(float $numberRttRemaining) : void {
        $this->numberRttRemaining = $numberRttRemaining;
    }
    /**
     * @return float
     */
    public function getEmployeeId() : float {
        return $this->employeeId;
    }

    /**
     * @param float $employeeId
     */
    public function setEmployeeId(float $employeeId) : void{
        $this->employeeId = $employeeId;
    }

}