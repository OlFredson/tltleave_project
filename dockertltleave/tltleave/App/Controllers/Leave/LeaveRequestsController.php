<?php

namespace App\Controllers\Leave;

use App\Controllers\AbstractController;
use App\Controllers\Admin\AdminController;
use App\Controllers\SecurityController;
use App\Models\Entity\Leave;
use App\Models\Manager\Leave\LeaveManager;
use App\Models\Manager\Leave\LeaveTypeManager;

class LeaveRequestsController extends AbstractController {

    private LeaveTypeManager $leaveTypeManager;
    private SecurityController $security;

    public function __construct() {
        $this->leaveTypeManager = new LeaveTypeManager();
        // Initialise le contrôleur de sécurité pour gérer la sécurité des entrées utilisateur.
        $this->security = new SecurityController();

    }

    // Fonction qui affiche la  page Demande de congés
    public function leaveRequests() :void {
        $title='Demande de congés';
        $this->render("Employee/LeaveRequests.view", [
            'title'=>$title
        ]);
    }

    public function adminLeaveRequests() :void {
        $leaveTypes = $this->leaveTypeManager->getAllLeaveTypes();
        $title='Demande de congés';
        $token = $this->security->generateCsrfToken();
        $this->render("Admin/AdminLeaveRequests.view", [
            'title'=>$title,
            'csrf_token' => $token,
            'leaveTypes' => $leaveTypes
        ]);
    }

    public function addRequests () :void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupérer les données du formulaire
            $leaveType = $this->security->cleanInput($_POST['leaveTypeName']);
            $beginDate = new \DateTime($_POST['beginDate']);
            /*$beginTime = $this->security->cleanInput($_POST['beginTime']);*/
            $endDate = new \DateTime($_POST['endDate']);
            /*$endTime = $this->security->cleanInput($_POST['endTime']);*/
            $nbrDays = $this->security->cleanInput($_POST['nbrDays']);
            $commentary = $this->security->cleanInput($_POST['commentary']);

            $leave = new Leave($leaveType,$beginDate,$endDate,$nbrDays);
            $leave->setCommentary($commentary);

            $leaveManager = new LeaveManager();

            // Insère le nouvel utilisateur dans la base de données.
            $leaveInserted = $leaveManager->createLeave($leave);

            // Affiche un message de succès ou d'erreur en fonction du résultat de l'insertion.
            if ($leaveInserted) {
                $this->adminLeaveRequests();
            } else {
                echo "Erreur lors de la création de l'utilisateur.";
            }
        }
    }

}