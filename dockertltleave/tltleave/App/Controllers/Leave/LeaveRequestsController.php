<?php

namespace App\Controllers\Leave;

use App\Controllers\AbstractController;

class LeaveRequestsController extends AbstractController {

    public function leaveRequests() :void {
        $title='Demande de congés';
        $this->render("Employee/LeaveRequests.view", ['title'=>$title]);
    }
}