<?php

namespace App\Models\Manager\Common;

use App\Core\Database;
use PDO;

class LeaveTypeManager {

    private $db;

    public function __construct(){
        $this->db = new Database();

    }

    /**
     *  READ : Récupération de tous les types de congés.
     *
     *
     */
    public function getAllLeaveTypes() {
        $stmt = $this->db->prepare("SELECT * FROM leave_types");
        $stmt->execute();
        return $stmt->fetchAll((PDO::FETCH_ASSOC));
    }
}