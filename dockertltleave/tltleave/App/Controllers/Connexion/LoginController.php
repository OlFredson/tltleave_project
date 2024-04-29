<?php

class LoginController {

    public function authentication() {
        $this->render("EmployeeDashboard");
    }


    public function render($viewName) {
        include '../App/Views/Employee/'.$viewName.'.view.php';
    }
}