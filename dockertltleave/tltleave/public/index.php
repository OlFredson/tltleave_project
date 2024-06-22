<?php
/*
use App\Controllers\Admin\AdminController;
use App\Controllers\Connexion\AuthController;
use App\Controllers\Connexion\PasswordController;
use App\Controllers\Employee\EmployeeController;
use App\Controllers\Leave\LeaveRequestsController;
use App\Controllers\User\UserController;

require_once __DIR__ . '/../vendor/autoload.php';

# Définir la constante URL
define(
    'URL', str_replace("public/", "", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . dirname($_SERVER['PHP_SELF']) . ''))
);

// Définir le chemin absolu vers le répertoire contenant les fichiers de vue
define('VIEWS_PATH', __DIR__ . '/../App/Views/');

// Instancier les contrôleurs nécessaires
$usersAuth = new AuthController();
$userPass = new PasswordController();
$admin = new AdminController();
$employee = new EmployeeController();
$leaveEmployee = new LeaveRequestsController();
$leaveAdmin = new LeaveRequestsController();
$userController = new UserController();
$userDelete = new UserController();

try {
    // Gérer les demandes de pages
    if (empty($_GET["page"])) {
        // Si aucune page spécifiée, rediriger vers la page d'authentification
        $usersAuth->authentication();
    } else {
        // Analyser l'URL demandée et router vers les méthodes appropriées des contrôleurs
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));

        switch ($url[0]) {
            // Cas pour la partie connexion
            case 'authentication':
            case 'passwordforgot':
            case 'resetpassword':
            case 'connexionOk':
                switch ($url[0]) {
                    case "authentication":
                        $usersAuth->authentication();
                        break;
                    case "passwordforgot":
                        $userPass->passwordForgot();
                        break;
                    case "resetpassword":
                        $userPass->resetPassword();
                        break;
                    case 'connexionOk':
                        $usersAuth->authValidation();
                        break;
                }
                break;

            // Cas pour la partie admin
            case 'adminDashboard':
            case 'adminUsermanagement':
            case 'adminSubmitusers':
            case 'adminAddusers':
            case 'userDelete':
            case 'adminLeaverequests':
            case 'adminSubmitleave':
            case 'adminStatusrequests':
            case 'adminTreatmentrequests':
            case 'adminStatistics':
            case 'adminCalendar':
                if ($usersAuth->isAdmin()) {
                    switch ($url[0]) {
                        case "adminDashboard":
                            $admin->dashboard();
                            break;
                        case "adminUsermanagement":
                            $admin->userManagement();
                            break;
                        case 'adminSubmitusers':
                            $userController->add();
                            break;
                        case "adminAddusers":
                            $admin->addUsers();
                            break;
                        case "userDelete":
                            $userDelete->delete();
                            break;
                        case "adminLeaverequests":
                            $leaveAdmin->adminLeaveRequests();
                            break;
                        case "adminSubmitleave":
                            $leaveAdmin->addRequests();
                            break;
                        case "adminStatusrequests":
                            $admin->adminStatusRequests();
                            break;
                        case "adminTreatmentrequests":
                            $admin->treatmentRequests();
                            break;
                        case "adminStatistics":
                            $admin->statistics();
                            break;
                        case "adminCalendar":
                            $admin->calendar();
                            break;
                    }
                } else {
                    throw new Exception("Accès interdit: Vous n'avez pas les autorisations nécessaires pour accéder à cette page.");
                }
                break;

            // Cas pour la partie employee
            case 'dashboardemployee':
            case 'employeeStatusrequests':
            case 'employeeLeaverequests':
            case 'updateProfile':
                switch ($url[0]) {
                    case "dashboardemployee":
                        $employee->dashboardEmployee();
                        break;
                    case "employeeStatusrequests":
                        $employee->statusRequests();
                        break;
                    case "employeeLeaverequests":
                        $leaveEmployee->leaveRequests();
                        break;
                    case 'updateProfile':
                        echo json_encode($_POST);
                        break;
                }
                break;

            default:
                // Gérer le cas où la page demandée n'existe pas
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $exception) {
    // Gérer les exceptions et afficher la page d'erreur
    $error = $exception->getMessage();
    include VIEWS_PATH . "error.view.php";
}
*/


use App\Controllers\Admin\AdminController;
use App\Controllers\Connexion\AuthController;
use App\Controllers\Connexion\PasswordController;
use App\Controllers\Employee\EmployeeController;
use App\Controllers\Leave\LeaveRequestsController;
use App\Controllers\User\UserController;

require_once __DIR__ . '/../vendor/autoload.php';


# Cette  définit une constante "URL" qui contient l'URL de base de l'appli, en supprimant les parties "public/" et "index.php" de l'URL,
#en fonction du protocole utilisé (HTTP ou HTTPS) et du nom d'hôte du serveur
define(
    'URL',str_replace("public/","",        # Fonction qui supprime "public/" de l'URL de base
        str_replace("index.php","",        # Fonction qui supprime "index.php" de l'URL de base
            (isset($_SERVER["HTTPS"]) ? "https" : "http") # Opération ternaire qui vérifie si le protocole HTTPS est utilisé. S'il est défini, retourne "https", sinon retourne "http"
            . "://$_SERVER[HTTP_HOST]"                 # SuperGlobale qui contient le nom d'hôte du serveur où le script est exécuté
            . dirname($_SERVER['PHP_SELF']) . '')
    )      # Fonction qui renvoie le chemin du répertoire contenant le script PHP en cours d'exécution
);


// Définit le chemin absolu vers le répertoire contenant les fichiers de vue
define('VIEWS_PATH', __DIR__ . '/../App/Views/');

// Instancier les contrôleurs nécessaires
$usersAuth = new AuthController();
$userPass = new PasswordController;
$admin = new AdminController();
$employee = new EmployeeController();
$leaveEmployee = new LeaveRequestsController();
$leaveAdmin = new LeaveRequestsController();
$userController = new UserController();
$userDelete = new UserController();


try {
    // Gérer les demandes de pages

    if (empty($_GET["page"])) {
        // Si aucune page spécifiée, rediriger vers la page d'authentification
        $usersAuth->authentication();

    } else {
         // Analyse l'URL demandée et route vers les méthodes appropriées des contrôleurs
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));  # Cette ligne prends l'url et decoupe au niveau des /, cela à pour but de travailler avec les differents elements de notre URL . Ex : localhost:/tltleave/login

        $protectedPages = ['dashboard', 'usermanagement', 'treatmentrequests', 'statistics', 'calendar', 'addusers', 'dashboardemployee', 'statusrequests', 'leaverequests'];

        if (in_array($url[0], $protectedPages) && !$usersAuth->isAuthenticated()) {
            throw new Exception("Accès interdit: Vous devez être connecté pour accéder à cette page.");
        }
        switch ($url[0]) {
            case "authentication":
                $usersAuth->authentication();
                break;
            case "passwordforgot":
                $userPass->passwordForgot();
                break;
            case "resetpassword":
                $userPass->resetPassword();
                break;
            case 'connexionOk':
                $usersAuth->authValidation();
                break;
            case "adminDashboard":
                $admin->dashboard();
                break;
            case "adminUsermanagement":
                $admin->userManagement();
                break;
            case 'adminSubmitusers':
                $userController->add();
                break;
            case "adminAddusers":
                $admin->addUsers();
                break;
            case "userDelete":
                $userDelete->delete();
                break;
            case "adminLeaverequests":
                $leaveAdmin->adminLeaveRequests();
                break;
            case "adminSubmitleave":
                $leaveAdmin->addRequests();
                break;
            case "adminStatusrequests":
                $admin->adminStatusRequests();
                break;
            case "adminTreatmentrequests":
                $admin->treatmentRequests();
                break;
            case "adminStatistics":
                $admin->statistics();
                break;
            case "adminCalendar":
                $admin->calendar();
                break;
            case "dashboardemployee":
                $employee->dashboardEmployee();
                break;
            case "employeeStatusrequests":
                $employee->statusRequests();
                break;
            case "employeeLeaverequests":
                $leaveEmployee->leaveRequests();
                break;
            case 'updateProfile':
                echo json_encode($_POST);
                break;
            default:
            // Gere le cas où la page demandée n'existe pas
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $exception) {
    // Gere les exceptions et affiche la page d'erreur
    $error = $exception->getMessage();
    include VIEWS_PATH . "error.view.php";
}
?>