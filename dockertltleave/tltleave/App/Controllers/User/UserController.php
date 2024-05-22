<?php

namespace App\Controllers\User;

use App\Controllers\SecurityController;
use App\Models\Entity\Users;
use App\Models\Manager\UserManager;


class UserController {
    private SecurityController $security;

    public function __construct() {
        $this->security=new SecurityController();
    }
    // Vérifie si le formulaire a bien été soumis
    public function add():void {
        //Récupere les données du formulaire
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $userName = $_POST['userName'];
            $firstName = $_POST['firstName'];
            $birthDate = $_POST['birthDate'];
            $situation = $_POST['situation'];
            $childs = $_POST['childs'];
            $gender = $_POST['gender'];
            $userAddress = $_POST['userAddress'];
            $zipCode = $_POST['zipCode'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $phone = $_POST['phone'];
            $userMail = $_POST['userMail'];
            $userProfile = $_POST['userProfile'];
            $userRole = $_POST['userRole'];
            $employmentStatus = $_POST['employmentStatus'];
            $hiredDate = $_POST['hiredDate'];
            $userPassword = $_POST['userPassword'];

            $user = new Users(
                null, // Généré automatiquement par la BDD
                $userName,
                $firstName,
                new \DateTime($birthDate),
                $situation,
                $childs,
                $gender,
                $userAddress,
                $zipCode,
                $city,
                $country,
                $phone,
                $userMail,
                $userProfile,
                $userRole,
                $employmentStatus,
                new \DateTime($hiredDate),
                $userPassword,
                null,
                null

            );

            $userManager = new UserManager();

            $userInserted=$userManager->insertUser($user);

            if($userInserted){
                echo "Utilisateur crée avec succès.";
            } else {
                "Erreur lors de la création de l'utilisateur";

            }
        }
    } 
}