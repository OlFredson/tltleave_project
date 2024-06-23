<?php

namespace App\Models\Manager\Connexion;

use App\Core\Database;
use Exception;
use PDO;

class AuthManager {

    private PDO $db;

    public function __construct() {
        $this->db = new Database();
    }

    /**
     * READ : Vérifie le mot de passe de l'utilisateur.
     *
     * @param string $idEmployee L'ID de l'employé.
     * @param string $userPassword Le mot de passe de l'utilisateur.
     * @return bool Retourne vrai si le mot de passe est correct, faux sinon.
     */
    public function verifyPassword(string $userName, string $userPassword): bool
    {
        try {
            $stmt = $this->db->prepare('SELECT user_password FROM users WHERE user_name = ?');
            $stmt->execute([$userName]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return password_verify($userPassword, $result['user_password']);
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Erreur lors de la vérification du mot de passe : " . $e->getMessage();
            return false;
        }
    }
}