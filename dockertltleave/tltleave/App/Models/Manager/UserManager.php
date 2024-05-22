<?php

namespace App\Models\Manager;


use App\Models\Entity\Users;
use PDO;

class UserManager {
    private PDO $db;

    public function __construct(){
        $this->db= new PDO("mysql:host=localhost;dbname=tltleavedb;charset=utf8;port=8080","tlt_user","Onepiece87.");
    }

    /**
     *@param Users $user
     *@return bool
     */

    public function insertUser(Users $user):bool {
        $stmt=$this->db->prepare("INSERT INTO users (userName,firstName,birthDate,situation,childs,gender,userAddress,zipCode,city,country,phone,userMail,userProfile,userRole,employmentStatus,hiredDate,userPassword,adminId,teamId) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addUser=$stmt->execute([
            $user->getUserName(),
            $user->getFirstname(),
            $user->getBirthDate() ? $user->getBirthDate()->format('Y-m-d'):null,
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
            $user->getHiredDate() ? $user->getHiredDate()->format('Y-m-d'):null,
            $user->getUserPassword(),
            $user->getAdminId(),
            $user->getTeamId(),
        ]);
        return $addUser;
    }

    /**
     * @param string $idEmployee
     * @param string $userPassword
     * @return mixed
     */
    public function verifyPassword(string $idEmployee, string $userPassword): bool
    {
        $user=$this->getUserByIdEmployee($idEmployee);
        if($user && password_verify($userPassword, $user['userPassword'])){
            return true;
        }
        return false;
    }

    public function getUserByIdEmployee(string $idEmployee):mixed {
        $stmt=$this->db->prepare("SELECT * FROM users WHERE idEmployee=:idEmployee");
        $stmt->execute(["idEmployee"=>$idEmployee]);
        $user=$stmt->fetch();
        return $user;
    }
}