<?php

namespace App\Controllers\Employee\Leave;

use App\Controllers\Common\AbstractController;
use App\Controllers\Common\SecurityController;
use App\Models\Entity\Leave;
use App\Models\Manager\Common\LeaveTypeManager;
use App\Models\Manager\Employee\Leave\EmployeeLeaveRequestsManager;

class EmployeeLeaveRequestsController extends AbstractController {

    private LeaveTypeManager $leaveTypeManager;
    private SecurityController $security;

    public function __construct() {
        $this->leaveTypeManager = new LeaveTypeManager();
        // Initialise le contrôleur de sécurité pour gérer la sécurité des entrées utilisateur.
        $this->security = new SecurityController();

    }

    // Fonction qui affiche la  page Demande de congés
    public function employeeleaveRequests() :void {
        $title='Demande de congés';
        $this->render("Employee/EmployeeLeaveRequests.view.view", [
            'title'=>$title
        ]);
    }

    public function addRequests () :void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupérer les données du formulaire
            $leaveType = $this->security->cleanInput($_POST['leaveTypeName']);
            $beginDate = new \DateTime($_POST['beginDate']);
            $endDate = new \DateTime($_POST['endDate']);
            $nbrDays = $this->security->cleanInput($_POST['nbrDays']);
            $commentary = $this->security->cleanInput($_POST['commentary']);

            $leave = new Leave($leaveType,$beginDate,$endDate,$nbrDays);
            $leave->setCommentary($commentary);

            $leaveManager = new EmployeeLeaveRequestsManager();

            // Insère le nouvel utilisateur dans la base de données.
            $leaveInserted = $leaveManager->createLeave($leave);

            // Affiche un message de succès ou d'erreur en fonction du résultat de l'insertion.
            if ($leaveInserted) {
                $this->employeeleaveRequests();
            } else {
                echo "Erreur lors de la création de demande de congés.";
            }
        }
    }

}