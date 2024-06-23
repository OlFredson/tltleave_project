<?php

namespace App\Models\Manager\Admin\Leave;

use App\Models\Entity\Leave;
use Exception;
use PDO;

class AdminLeaveRequestsManager {

    private PDO $db;

    public function __construct()
    {
        try {
            // Initialisation de l'instance PDO pour la connexion à la base de données.
            $this->db = new PDO("mysql:host=172.24.176.1;dbname=tltleavedb;charset=utf8;port=3307", "tlt_user", "tlt_password");
        } catch (Exception $exception) {
            // Gestion de l'exception en affichant un message d'erreur.
            echo ('<br>Erreur de connexion : ' . $exception->getMessage() . '<br>');
        }
    }

    /**
     *  CREATE : Insertion d'une demande de congés dans la base de données.
     *
     * @param Leave $leave L'entité utilisateur à insérer.
     * @return bool Retourne vrai si l'utilisateur a été inséré avec succès,  sinon faux.
     */
    public function createLeave(Leave $leave) : bool {
        $addLeaves = false;
        try{
            $stmt = $this->db->prepare('INSERT INTO leaves (leave_type,begin_date,end_date,nbr_days,commentary) VALUES (?,?,?,?,?)');
            // Exécute l'instruction avec les détails de le demande de congés.
            $addLeaves = $stmt->execute([
                $leave->getLeaveType(),
                $leave->getBeginDate() ? $leave->getBeGinDate()->format('Y-m-d') : null,
                $leave->getEndDate() ? $leave->getEndDate()->format('Y-m-d') : null,
                $leave->getNbrDays(),
                $leave->getCommentary()

            ]);
        } catch (Exception $exception) {
            // Affiche le message d'exception en cas d'erreur.
            echo ($exception->getMessage());
        }
        return $addLeaves;
    }
}