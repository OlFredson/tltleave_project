<?php

use App\Controllers\Admin\calendar\AdminCalendarController;
use App\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Controllers\Admin\Leave\AdminLeaveRequestsController;
use App\Controllers\Admin\Leave\AdminStatusRequestsController;
use App\Controllers\Admin\Leave\AdminTreatmentRequestsController;
use App\Controllers\Admin\Statistic\AdminStatisticsController;
use App\Controllers\Admin\UserManagement\AdminUserManagementController;
use App\Controllers\Connexion\AuthController;
use App\Controllers\Connexion\PasswordController;
use App\Controllers\Employee\Dashboard\EmployeeDashboardController;
use App\Controllers\Employee\Leave\EmployeeHistoricStatusController;
use App\Controllers\Employee\Leave\EmployeeLeaveRequestsController;

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

// Instanciation des contrôleurs nécessaires
$usersAuth = new AuthController();
$userPass = new PasswordController;
$adminDash = new AdminDashboardController();
$adminMgmt = new AdminUserManagementController();
$adminLeave = new AdminLeaveRequestsController();
$adminStatus = new AdminStatusRequestsController();
$adminTreatment = new AdminTreatmentRequestsController();
$adminStatistic = new AdminStatisticsController();
$adminCalendar = new AdminCalendarController();
$employeeDash = new EmployeeDashboardController();
$employeeStatus = new EmployeeHistoricStatusController();
$employeeLeave = new EmployeeLeaveRequestsController();


// Démarrer la session
session_start();

// Vérifier si l'utilisateur est authentifié
if (isset($_SESSION['user'])) {
    // Récupérer le rôle de l'utilisateur depuis la session
    $role = $_SESSION['user_profile']['Administrator']; // Supposons que 'role' soit une clé dans votre tableau de session
} else {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié
    header('Location: login.php');
    exit;
}

try {
    // Gérer les demandes de pages

    if (empty($_GET["page"])) {
        // Si aucune page spécifiée, rediriger vers la page d'authentification
        $usersAuth->authentication();

    } else {
         // Analyse l'URL demandée et route vers les méthodes appropriées des contrôleurs
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));  # Cette ligne prends l'url et decoupe au niveau des /, cela à pour but de travailler avec les differents elements de notre URL . Ex : localhost:/tltleave/login

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
                $adminDash->dashboard();
                break;
            case "adminUsermanagement":
                $adminMgmt->userManagement();
                break;
            case 'adminSubmitusers':
                $adminMgmt->add();
                break;
            case "adminAddusers":
                $adminMgmt->addUsers();
                break;
            case "userDelete":
                $adminMgmt->delete();
                break;
            case "adminLeaverequests":
                $adminLeave->adminLeaveRequests();
                break;
            case "adminSubmitleave":
                $adminLeave->addRequests();
                break;
            case "adminStatusrequests":
                $adminStatus->adminStatusRequests();
                break;
            case "adminTreatmentrequests":
                $adminTreatment->treatmentRequests();
                break;
            case "adminStatistics":
                $adminStatistic->statistics();
                break;
            case "adminCalendar":
                $adminCalendar->calendar();
                break;
            case "employee-dashboard":
                $employeeDash->employeeDashboard();
                break;
            case "employeeStatusrequests":
                $employeeStatus->statusRequests();
                break;
            case "employeeLeaverequests":
                $employeeLeave->employeeleaveRequests();
                break;
            //Correspond a la modification du user
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