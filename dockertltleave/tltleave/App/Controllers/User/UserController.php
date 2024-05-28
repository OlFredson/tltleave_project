<?php

namespace App\Controllers\User;

use App\Controllers\SecurityController;
use App\Models\Entity\Users;
use App\Models\Manager\UserManager;

class UserController // Responsable de la gestion des utilisateurs (création, mise à jour, suppression)
{
    private SecurityController $security;

    public function __construct()
    {
        $this->security = new SecurityController();
    }
    // Vérifie si le formulaire a bien été soumis
    public function add(): void
    {

        //Récupere les données du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $userName = $this->security->cleanInput($_POST['userName']);
            $firstName = $this->security->cleanInput($_POST['firstName']);
            $birthDate = new \DateTime($_POST['birthDate']);
            $situation = $this->security->cleanInput($_POST['situation']);
            $childs = $this->security->cleanInput($_POST['childs']);
            $gender = $this->security->cleanInput($_POST['gender']);
            $userAddress = $this->security->cleanInput($_POST['userAddress']);
            $zipCode = $this->security->cleanInput($_POST['zipCode']);
            $city = $this->security->cleanInput($_POST['city']);
            $country = $this->security->cleanInput($_POST['country']);
            $phone = $this->security->cleanInput($_POST['phone']);
            $userMail = $this->security->cleanInput($_POST['userMail']);
            $userProfile = $this->security->cleanInput($_POST['userProfile']);
            $userRole = $this->security->cleanInput($_POST['userRole']);
            $employmentStatus = $this->security->cleanInput($_POST['employmentStatus']);
            $hiredDate = new \DateTime($_POST['hiredDate']);
            $userPassword = $this->security->cleanInput($_POST['userPassword']);

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

            /*
            if (!$this->security->verifyCsrfToken($csrfToken)) {
                DisplayController::messageAlert("Veuillez réessayer plus tard", DisplayController::ROUGE);
                $this->redirectToRoute("register");
            }

            if ($firstName == false || $email == false || $userPassword == false || $confirmPassword == false) {
                DisplayController::messageAlert("Tous les champs sont requis", DisplayController::ROUGE);
                $this->redirectToRoute("register");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                DisplayController::messageAlert("Email non valide", DisplayController::ROUGE);
                $this->redirectToRoute("register");
            }

            if ($password !== $confirmPassword) {
                DisplayController::messageAlert("MDP correspondent pas", DisplayController::ROUGE);
                $this->redirectToRoute("register");
            }*/

            $userManager = new UserManager();

            $userInserted = $userManager->insertUser($user);

            if ($userInserted) {
                echo "Utilisateur crée avec succès.";
            } else {
                "Erreur lors de la création de l'utilisateur";
            }
        }

    }
}