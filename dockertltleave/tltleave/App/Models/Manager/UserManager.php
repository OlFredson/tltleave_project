<?php

namespace App\Models\Manager;

use App\Models\Entity\Users;
use Exception;
use PDO;

class UserManager
{
    private PDO $db;

    /**
     * Constructeur : établit une connexion à la base de données.
     * Capture les exceptions si la connexion échoue et affiche le message d'erreur.
     */
    public function __construct()
    {
        try {
            // Initialisation de l'instance PDO pour la connexion à la base de données.
            $this->db = new PDO("mysql:host=192.168.1.102;dbname=tltleavedb;charset=utf8;port=3307", "tlt_user", "tlt_password");
        } catch (Exception $exception) {
            // Gestion de l'exception en affichant un message d'erreur.
            echo ('<br>Erreur de connexion : ' . $exception->getMessage() . '<br>');
        }
    }

    /**
     * Insère un nouvel utilisateur dans la base de données.
     *
     * @param Users $user L'entité utilisateur à insérer.
     * @return bool Retourne vrai si l'utilisateur a été inséré avec succès,  sinon faux.
     */
    public function insertUser(Users $user): bool
    {
        $addUser = false;
        try {
            // Prépare l'instruction SQL pour insérer un nouvel utilisateur.
            $stmt = $this->db->prepare("INSERT INTO users (user_name, firstname, birth_date, gender, situation, child, user_address, zip_code, city, country, phone, user_mail, user_image, user_profile, user_role, employement_status, hired_date, user_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            // Exécute l'instruction avec les détails de l'utilisateur.
            $addUser = $stmt->execute([
                $user->getUserName(),
                $user->getFirstname(),
                $user->getBirthDate() ? $user->getBirthDate()->format('Y-m-d') : null,
                $user->getGender(),
                $user->getSituation(),
                $user->getChild(),
                $user->getUserAddress(),
                $user->getZipCode(),
                $user->getCity(),
                $user->getCountry(),
                $user->getPhone(),
                $user->getUserMail(),
                $user->getUserImage(),
                $user->getUserProfile(),
                $user->getUserRole(),
                $user->getEmploymentStatus(),
                $user->getHiredDate() ? $user->getHiredDate()->format('Y-m-d') : null,
                $user->getUserPassword()
            ]);
        } catch (Exception $exception) {
            // Affiche le message d'exception en cas d'erreur.
            echo ($exception->getMessage());
        }
        return $addUser;
    }

    /**
     * Vérifie le mot de passe de l'utilisateur.
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

    /**
     * Récupère un utilisateur par son ID employé.
     *
     * @param string $idEmployee L'ID de l'employé.
     * @return mixed Les détails de l'utilisateur ou false si non trouvé.
     */
    public function getUserByIdEmployee(string $idEmployee): mixed
    {
        // Prépare l'instruction SQL pour récupérer un utilisateur par ID employé.
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id_employee=?");
        // Exécute l'instruction avec l'ID de l'employé.
        $stmt->execute(["id_employee" => $idEmployee]);
        // Récupère et retourne le résultat.
        $user = $stmt->fetch();
        return $user;
    }

    /**
     * Récupère un utilisateur par son rôle.
     *
     * @param string $userProfile Le profil utilisateur.
     * @return mixed Les détails de l'utilisateur ou false si non trouvé.
     */
    public function getUserByRole(string $userProfile): mixed
    {
        // Prépare l'instruction SQL pour récupérer un utilisateur par profil.
        $stmt = $this->db->prepare("SELECT * FROM users WHERE user_profile=?");
        // Exécute l'instruction avec le profil utilisateur.
        $stmt->execute(['user_profile' => $userProfile]);
        // Récupère et retourne le résultat.
        $user = $stmt->fetch();
        return $user;
    }

    /**
     * Récupère tous les utilisateurs.
     *
     * @return array Un tableau associatif contenant tous les utilisateurs.
     */
    public function getAllUsers(): array
    {
        // Prépare l'instruction SQL pour récupérer tous les utilisateurs.
        $stmt = $this->db->prepare("SELECT * FROM users");
        // Exécute l'instruction.
        $stmt->execute();
        // Récupère et retourne tous les résultats.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
