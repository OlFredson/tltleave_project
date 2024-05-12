<?php

class UserManager {
    private PDO $db;

    public function __construt(){
        $this->db= new PDO("mysql:host=localhost;dbname=tltleavedb;charset=utf8;port=8080","tlt_user","Onepiece87.");
    }

    /**
     *@param User $user
     *@return bool
     */

    public function insertUser(User $user):bool {
        $stmt=$this->db->prepare("INSERT INTO users (userName,firstname,birthDate,situation,childs,gender,userAddress,zipCode,city,country,phone,mail,userProfile,userRole,employmentStatus,hiredDate,userPassword,adminId,teamId) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $addUser=$stmt->execute([
            $user->getUserName(),
            $user->getFirstname(),
            $user->getBirthDate(),
            $user->getSituation(),
            $user->getChilds(),
            $user->getGender(),
            $user->getUserAddress(),
            $user->getZipCode(),
            $user->getCity(),
            $user->getCountry(),
            $user->getPhone(),
            $user->getMail(),
            $user->getUserProfile(),
            $user->getUserRole(),
            $user->getEmploymentStatus(),
            $user->getHiredDate(),
            $user->getUserPassword(),
            $user->getAdminId(),
            $user->getTeamId(),
        ]);
        return $addUser;
    }
}