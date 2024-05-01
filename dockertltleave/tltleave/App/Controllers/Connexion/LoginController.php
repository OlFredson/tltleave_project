<?php

class LoginController {

    public function authentication() {
        $this->render("HistoricStatusRequests");
    }


    public function render($viewName) {
        include '../App/Views/Employee/'.$viewName.'.view.php';
    }
}