<?php
namespace App\Models\Manager\Team;

use App\Core\Database;
use PDO;

class TeamManager {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    /**
     *  READ : Récupération de tous les types de congés.
     *
     *
     */
    public function getAllTeamNames(): array
    {
        $stmt = $this->db->query("SELECT team_name FROM teams");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}