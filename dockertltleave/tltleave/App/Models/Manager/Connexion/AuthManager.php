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
    public function verifyPassword(string $idEmployee, string $userPassword): bool
    {
        try {
            // Prépare l'instruction SQL pour récupérer le mot de passe de l'utilisateur par ID employé.
            $stmt = $this->db->prepare('SELECT user_password FROM users WHERE id_employee = ?');
            // Exécute l'instruction avec l'ID de l'employé.
            $stmt->execute(['id_employee' => $idEmployee]);
            // Récupère le résultat sous forme de tableau associatif.
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result); // Ajout de var_dump pour voir le résultat
            if ($result) {
                // Vérifie le mot de passe.
                return password_verify($userPassword, $result['user_password']);
            } else {
                return false;
            }
        } catch (Exception $e) {
            // Affiche un message d'erreur en cas de problème lors de la vérification du mot de passe.
            echo "Erreur lors de la vérification du mot de passe : " . $e->getMessage();
            return false;
        }
    }
}