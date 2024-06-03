<?php

namespace App\Controllers\Employee;

use App\Controllers\AbstractController;


class EmployeeController extends AbstractController {
    
    public function dashboardEmployee() :void {
    $title="Dashboard";
    $this->render("Employee/EmployeeDashboard.view",['title'=>$title]);
    }

    public function statusRequests() :void {
        $title='Statut des demandes';
        $this->render("Employee/HistoricStatusRequests.view", ['title'=>$title]);
    }

    
}