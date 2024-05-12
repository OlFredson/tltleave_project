<?php

/*namespace App\Controllers\Admin;*/

require_once "../App/Controllers/MethodRender.php";

class AdminController {
    
    private $methodRender;
    public function __construct(){
        $this->methodRender = new MethodRender();
    }

    public function dashboard():void {
        $title="Dashboard";
        $this->methodRender->render("Admin/AdminDashboard.view", [
            'title'=>$title]);
    }

    public function userManagement() :void {
        $title= "Gestion des utilisateurs";
        $this-> methodRender->render("Admin/UserManagement.view", ['title' =>$title]);
    }

    public function treatmentRequests() :void {
        $title= "Traitement des demandes";
        $this-> methodRender->render("Admin/TreatmentRequests.view", ['title' =>$title]);
    }

    public function statistics() :void {
        $title= "Statistiques";
        $this-> methodRender->render("Admin/Statistics.view", ['title' =>$title]);
    }

    public function calendar() :void {
        $title= "Calendrier";
        $this-> methodRender->render("Admin/Calendar.view", ['title' =>$title]);
    }

    public function addUsers() :void {
        $title= "Ajout utilisateurs";
        $this-> methodRender->render("Admin/AddUsers.view", ['title' =>$title]);
    }


}