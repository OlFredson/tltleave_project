<?php

namespace App\Controllers\User;

use App\Controllers\AbstractController;
use App\Controllers\Admin\AdminController;
use App\Controllers\SecurityController;
use App\Models\Entity\Users;
use App\Models\Manager\User\UserManager;

// Classe responsable de la gestion des utilisateurs (création, mise à jour, suppression)
class UserController extends AbstractController
{
    /**
     *
     */
    private SecurityController $security;
    private UserManager $userManager;

    public function __construct()
    {
        // Initialise le contrôleur de sécurité pour gérer la sécurité des entrées utilisateur.
        $this->security = new SecurityController();
        $this->userManager = new UserManager();
    }

    // Fonction qui vérifie si le formulaire a bien été soumis
    public function add(): void
    {
        // Vérifie si la méthode de requête est POST (soumission du formulaire).
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Récupère et nettoie les données du formulaire.
            $userName = $this->security->cleanInput($_POST['userName']);
            $firstName = $this->security->cleanInput($_POST['firstName']);
            $birthDate = new \DateTime($_POST['birthDate']);
            $gender = $this->security->cleanInput($_POST['gender']);
            $situation = $this->security->cleanInput($_POST['situation']);
            $child = $this->security->cleanInput($_POST['child']);
            $userAddress = $this->security->cleanInput($_POST['userAddress']);
            $zipCode = $this->security->cleanInput($_POST['zipCode']);
            $city = $this->security->cleanInput($_POST['city']);
            $country = $this->security->cleanInput($_POST['country']);
            $phone = $this->security->cleanInput($_POST['phone']);
            $userMail = $this->security->cleanInput($_POST['userMail']);
            $userProfile = $this->security->cleanInput($_POST['userProfile']);
            $userRole = $this->security->cleanInput($_POST['userRole']);
            $team = $this->security->cleanInput($_POST['team']);
            $employmentStatus = $this->security->cleanInput($_POST['employmentStatus']);
            $hiredDate = new \DateTime($_POST['hiredDate']);
            $userPassword = $this->security->cleanInput($_POST['userPassword']);
            $userImage = $this->security->cleanInput($_POST['userImage']);

            // Crée une nouvelle instance de l'utilisateur avec les données récupérées.
            $user = new Users($userName, $firstName, $userMail, $userProfile, $userPassword);
            $user->setBirthDate($birthDate);
            $user->setGender($gender);
            $user->setSituation($situation);
            $user->setChild($child);
            $user->setCity($city);
            $user->setUserAddress($userAddress);
            $user->setZipCode($zipCode);
            $user->setCountry($country);
            $user->setPhone($phone);
            $user->setUserRole($userRole);
            $user->setTeam($team);
            $user->setEmploymentStatus($employmentStatus);
            $user->setHiredDate($hiredDate);
            $user->setUserImage($userImage);

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

            // Crée une instance de UserManager pour gérer les opérations sur les utilisateurs.
            $userManager = new UserManager();

            // Insère le nouvel utilisateur dans la base de données.
            $userInserted = $userManager->insertUser($user);

            // Affiche un message de succès ou d'erreur en fonction du résultat de l'insertion.
            if ($userInserted) {
                $userCreate = new AdminController();
                $userCreate->addUsers();
            } else {
                echo "Erreur lors de la création de l'utilisateur.";
            }
        }
    }

    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idEmployee = intval($_POST['idEmployee']);
            $userDeleted = $this->userManager->removeUser($idEmployee);

            if ($userDeleted) {
                $userSupp = new AdminController();
                $userSupp->deleteUser();
            } else {
                echo "Erreur lors de la suppression de l'utilisateur.";
            }
            } else {
                echo "Requête invalide.";
        }
    }

    /*
    public function getProfileImagePath($idEmployee) {
        $imageName = $this->userManager->getImageNameByUserId($idEmployee);

        if ($imageName) {
            return "assets/images/photoprofil/" . htmlspecialchars($imageName);
        } else {
            return "assets/images/photoprofil/default.jpg"; // Chemin par défaut si aucune image n'est trouvée
        }
    }

    public function getUsersWithProfileImagePaths() {
        $users = $this->userManager->getAllUsers(); // Assume this method returns an array of users
        foreach ($users as &$user) {
            $user['profile_image_path'] = $this->getProfileImagePath($user['id_employee']);
        }
        return $users;
    }*/


}
