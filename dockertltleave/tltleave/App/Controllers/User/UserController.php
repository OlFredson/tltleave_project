<?php

namespace App\Controllers\User;

use App\Controllers\SecurityController;
use App\Models\Entity\Users;
use App\Models\Manager\UserManager;

class UserController
{
    private SecurityController $security;

    public function __construct()
    {
        $this->security = new SecurityController();
    }
    // Vérifie si le formulaire a bien été soumis
    public function add(): void
    {
        echo ('avant add');
        echo ('<br>');

        //Récupere les données du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo ('dans if');
            $userName = $_POST['userName'];
            $firstName = $_POST['firstName'];
            $birthDate = new \DateTime($_POST['birthDate']);
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
            $hiredDate = new \DateTime($_POST['hiredDate']);
            $userPassword = $_POST['userPassword'];

            $user = new Users($userName, $firstName, $userMail, $userProfile, $userPassword);
            $user->setBirthDate($birthDate);
            $user->setSituation($situation);
            $user->setChilds($childs);
            $user->setCity($city);
            $user->setGender($gender);
            $user->setUserAddress($userAddress);
            $user->setZipCode($zipCode);
            $user->setCountry($country);
            $user->setPhone($phone);
            $user->setUserRole($userRole);
            $user->setEmploymentStatus($employmentStatus);
            $user->setHiredDate($hiredDate);


            $userManager = new UserManager();

            echo ('<br>');
            echo ('avant insertion user');

            $userInserted = $userManager->insertUser($user);

            if ($userInserted) {
                echo "Utilisateur crée avec succès.";
            } else {
                "Erreur lors de la création de l'utilisateur";
            }
        }
        echo ('en dehors du if');
    }
}