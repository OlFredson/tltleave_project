<?php

namespace App\Models\Entity;

class Admin {

    private int $adminId;
    private int $employeeId;

    public function __construct (
        int $adminId,
        int $employeeId
    ) {
        $this->setAdminId($adminId);
        $this->setEmployeeId($employeeId);
    }

    public function getAdminId () : int {
        return $this->adminId;
    }
    public function setAdminId (int $adminId) : void {
        $this->adminId = $adminId;
    }

    public function getEmployeeId () : int {
        return $this->employeeId;
    }
    public function setEmployeeId (int $employeeId) : void {
        $this->employeeId = $employeeId;
    }
}