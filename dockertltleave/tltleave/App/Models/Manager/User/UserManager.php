<?php

namespace App\Models\Manager\User;

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
            $this->db = new PDO("mysql:host=172.24.176.1;dbname=tltleavedb;charset=utf8;port=3307", "tlt_user", "tlt_password");
        } catch (Exception $exception) {
            // Gestion de l'exception en affichant un message d'erreur.
            echo ('<br>Erreur de connexion : ' . $exception->getMessage() . '<br>');
        }
    }

    /**
     *  CREATE : Insertion d'un User dans la base de données.
     *
     * @param Users $user L'entité utilisateur à insérer.
     * @return bool Retourne vrai si l'utilisateur a été inséré avec succès,  sinon faux.
     */
    public function insertUser(Users $user): bool
    {
        $addUser = false;
        try {
            // Prépare l'instruction SQL pour insérer un nouvel utilisateur.
            $stmt = $this->db->prepare("INSERT INTO users (user_name, firstname, birth_date, gender, situation, child, user_address, zip_code, city, country, phone, user_mail, user_image, user_profile, user_role, team,employement_status, hired_date, user_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
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
                $user->getTeam(),
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
     *  READ : Récupération d'un User par son ID.
     *
     * @param string $idEmployee L'ID de l'employé.
     * @return mixed Les détails de l'utilisateur ou false si non trouvé.
     */
    public function getUserByIdEmployee(string $idEmployee): mixed
    {
        // Prépare l'instruction SQL pour récupérer un utilisateur par ID employé.
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id_employee=?');
        // Exécute l'instruction avec l'ID de l'employé.
        $stmt->execute(["id_employee" => $idEmployee]);
        // Récupère et retourne le résultat.
        $user = $stmt->fetch();
        return $user;
    }

    /**
     *  READ : Récupèration d'un User par son profil (admin ou employee).
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
     *  READ : Récupèration tous les Users via un tableau associatif
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

    /**
     * UPDATE : Modification de propriétés d'un User
     *
     *
     *
     */

    public function updateUser () {

    }

    /**
     *  DELETE : Suppression d'un User
     *
     *@param int $idEmployee
     *@return bool
     */

    public function removeUser(int $idEmployee): bool
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id_employee = ?");
            return $stmt->execute([$idEmployee]);
        } catch (Exception $exception) {
            echo ($exception->getMessage());
            return false;
        }
    }

    /**
     *  READ : Récupération de la photo de profil
     *
     */

    /*
    public function getImageNameByUserId($idEmployee) {
        $stmt = $this->db->prepare("SELECT imageName FROM users WHERE id = :id");
        $stmt->bindParam(':id', $idEmployee, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? $row["imageName"] : null;
    }*/
}
