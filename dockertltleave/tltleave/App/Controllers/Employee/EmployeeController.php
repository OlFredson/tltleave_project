<?php

/*namespace App\Controllers\Employee;*/

class EmployeeController {
    private $methodRender;

    public function __construct(){
        $this->methodRender= new MethodRender();

    }
    public function dashboardEmployee() :void {
    $title="Dashboard";
    $this->methodRender->render("Employee/EmployeeDashboard.view",['title'=>$title]);
    }

    public function statusRequests() :void {
        $title='Statut des demandes';
        $this->methodRender->render("Employee/HistoricStatusRequests.view", ['title'=>$title]);
    }

    public function leaveRequests() :void {
        $title='Demande de congés';
        $this->methodRender->render("Employee/LeaveRequests.view", ['title'=>$title]);
    }
}