<?php

namespace App\Controllers\Admin\Leave;

use App\Controllers\Common\AbstractController;
use App\Controllers\Common\SecurityController;
use App\Models\Entity\Leave;
use App\Models\Manager\Admin\Leave\AdminLeaveRequestsManager;
use App\Models\Manager\Common\LeaveTypeManager;

class AdminLeaveRequestsController extends AbstractController {

    private LeaveTypeManager $leaveTypeManager;
    private SecurityController $security;

    public function __construct() {
        $this->leaveTypeManager = new LeaveTypeManager();
        // Initialise le contrôleur de sécurité pour gérer la sécurité des entrées utilisateur.
        $this->security = new SecurityController();

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

    /**
     * Affiche la page d'ajout des utilisateurs.
     * Génére un token CSRF pour sécuriser le formulaire.
     *//*
    public function addLeave(): void
    {
        $title = "Demande de congés";
        // Génère un token CSRF pour sécuriser le formulaire.
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue d'ajout des utilisateurs avec le titre et le token CSRF.
        $this->render("Admin/AdminLeaveRequests.view", [
            'title' => $title,
            'csrf_token' => $token
        ]);
    }*/

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

            $leaveManager = new AdminLeaveRequestsManager();

            // Insère le nouvel utilisateur dans la base de données.
            $leaveInserted = $leaveManager->createLeave($leave);

            // Affiche un message de succès ou d'erreur en fonction du résultat de l'insertion.
            if ($leaveInserted) {
                $this->adminLeaveRequests();
            } else {
                echo "Erreur lors de la création de demande de congés.";
            }
        }
    }

}