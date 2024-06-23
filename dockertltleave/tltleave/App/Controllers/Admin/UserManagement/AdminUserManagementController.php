<?php

namespace App\Controllers\Admin\UserManagement;

use App\Controllers\Common\AbstractController;
use App\Controllers\Common\SecurityController;
use App\Models\Entity\Users;
use App\Models\Manager\Admin\UserManagement\AdminUserManagementManager;
use App\Models\Manager\Common\TeamManager;

// Classe responsable de la gestion des utilisateurs (création, mise à jour, suppression)
class AdminUserManagementController extends AbstractController {

    /**
     *
     */
    private SecurityController $security;
    private AdminUserManagementManager $userManager;
    private TeamManager $teamManager;

    public function __construct()
    {
        // Initialise le contrôleur de sécurité pour gérer la sécurité des entrées utilisateur.
        $this->security = new SecurityController();
        $this->userManager = new AdminUserManagementManager();
        $this->teamManager = new TeamManager();
    }

        /**
     * Affiche la gestion des utilisateurs.
     */
    public function userManagement(): void
    {
        $title = "Gestion des utilisateurs";
        // Crée une instance de UserManager pour récupérer tous les utilisateurs.
        $userManager = new AdminUserManagementManager();
        $users = $userManager->getAllUsers();
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue de gestion des utilisateurs avec le titre et la liste des utilisateurs.
        $this->render('Admin/UserManagement.view', [
            'title' => $title,
            'users' => $users,
            'csrf_token' => $token
        ]);
    }

    /**
     * Affiche la page d'ajout des utilisateurs.
     * Génére un token CSRF pour sécuriser le formulaire.
     */
    public function addUsers(): void
    {
        $title = "Ajout utilisateurs";
        // Génère un token CSRF pour sécuriser le formulaire.
        $token = $this->security->generateCsrfToken();
        // Rendu de la vue d'ajout des utilisateurs avec le titre et le token CSRF.
        $teams = $this->teamManager->getAllTeamNames();
        $this->render("Admin/AddUsers.view", [
            'title' => $title,
            'csrf_token' => $token,
            'teams' => $teams
        ]);
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
            $userManager = new AdminUserManagementManager();

            // Insère le nouvel utilisateur dans la base de données.
            $userInserted = $userManager->insertUser($user);

            // Affiche un message de succès ou d'erreur en fonction du résultat de l'insertion.
            if ($userInserted) {
                $this->addUsers();
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
                $this->userManagement();
            } else {
                echo "Erreur lors de la suppression de l'utilisateur.";
            }
            } else {
                echo "Requête invalide.";
        }
    }



}
