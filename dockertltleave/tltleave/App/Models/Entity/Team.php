<?php

namespace App\Models\Entity;

class Team {
    private int $teamId;
    private string $teamName;
    private string $teamResponsible;

    public function __construt (
        int $teamId,
        string $teamName,
        string $teamResponsible
    ){
        $this->setTeamId($teamId);
        $this->setTeamName($teamName);
        $this->setTeamResponsible($teamResponsible);
    }

    /**
     * @return int
     */
    public function getTeamId() : int {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     */
    public function setTeamId(int $teamId) : void {
        $this->teamId = $teamId;
    }

    /**
     * @return string
     */
    public function getTeamName() : string {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     */
    public function setTeamName(string $teamName) : void {
        $this->teamName =$teamName;
    }

    /**
     * @return string
     */
    public function getTeamResponsible() : string {
        return $this->teamResponsible;
    }

    /**
     * @param string $teamResponsible
     */
    public function setTeamResponsible(string $teamResponsible) : void {
        $this->teamResponsible = $teamResponsible;
    }
}