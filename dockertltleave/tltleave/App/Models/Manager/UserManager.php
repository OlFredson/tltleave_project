<?php

namespace App\Models\Manager;

use App\Models\Entity\Users;
use Exception;
use PDO;

class UserManager
{
    private PDO $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("mysql:host=192.168.1.118;dbname=tltleavedb;charset=utf8;port=3307", "tlt_user", "tlt_password");

        } catch (Exception $exception) {
            echo ('<br>Erreur de connexion : ' . $exception->getMessage() . '<br>');
        }
    }

    /**
     *@param Users $user
     *@return bool
     */

    public function insertUser(Users $user): bool
    {
        $addUser = false;
        try {
            $stmt = $this->db->prepare("INSERT INTO users (user_name,firstname,birth_date,gender,situation,child,user_address,zip_code,city,country,phone,user_mail,user_image,user_profile,user_role,employement_status,hired_date,user_password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
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
            echo ($exception->getMessage());
        }
        return $addUser;
    }

    /**
     * @param string $idEmployee
     * @param string $userPassword
     * @return bool
     */
    public function verifyPassword(string $idEmployee, string $userPassword): bool
    {
        try {
            $stmt = $this->db->prepare('SELECT user_password FROM users WHERE id_employee = ?');
            $stmt->execute(['id_employee' => $idEmployee]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result); // Ajout de var_dump pour voir le résultat
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


    public function getUserByIdEmployee(string $idEmployee): mixed
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id_employee=?");
        $stmt->execute(["id_employee" => $idEmployee]);
        $user = $stmt->fetch();
        return $user;
    }

    public function getUserByRole(string $userProfile): mixed
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE user_profile=?");
        $stmt->execute(['user_profile' => $userProfile]);
        $user = $stmt->fetch();
        return $user;
    }

    public function getAllUsers(): array
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
