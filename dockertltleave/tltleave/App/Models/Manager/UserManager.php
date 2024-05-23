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
        echo ('<br>');
        echo ('dans usermanager construct');

        try {

            $this->db = new PDO("mysql:host=192.168.1.104;dbname=tltleavedb;charset=utf8;port=3306", "tlt_user", "tlt_password");
        } catch (Exception $exception) {
            echo ($exception->getMessage());
        }
    }

    /**
     *@param Users $user
     *@return bool
     */

    public function insertUser(Users $user): bool
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO users (user_name,firstname,birth_date,situation,childs,gender,user_address,zip_code,city,country,phone,user_mail,user_profile,user_role,employment_status,hired_date,user_password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $addUser = $stmt->execute([
                $user->getUserName(),
                $user->getFirstname(),
                $user->getBirthDate() ? $user->getBirthDate()->format('Y-m-d') : null,
                $user->getSituation(),
                $user->getChilds(),
                $user->getGender(),
                $user->getUserAddress(),
                $user->getZipCode(),
                $user->getCity(),
                $user->getCountry(),
                $user->getPhone(),
                $user->getUserMail(),
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
     * @return mixed
     */
    public function verifyPassword(string $idEmployee, string $userPassword): bool
    {
        $user = $this->getUserByIdEmployee($idEmployee);
        if ($user && password_verify($userPassword, $user['userPassword'])) {
            return true;
        }
        return false;
    }

    public function getUserByIdEmployee(string $idEmployee): mixed
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE idEmployee=:idEmployee");
        $stmt->execute(["idEmployee" => $idEmployee]);
        $user = $stmt->fetch();
        return $user;
    }
}
