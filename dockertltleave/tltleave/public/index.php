<?php

use App\Controllers\Admin\AdminController;
use App\Controllers\Connexion\LoginController;
use App\Controllers\Employee\EmployeeController;
use App\Controllers\User\UserController;

require_once __DIR__.'/../vendor/autoload.php';



define('URL',str_replace("public/","",            # Fonction qui supprime "public/" de l'URL de base
        str_replace("index.php","",               # Fonction qui supprime "index.php" de l'URL de base
        (isset($_SERVER["HTTPS"])?"https":"http") # Opération ternaire qui vérifie si le protocole HTTPS est utilisé. S'il est défini, retourne "https", sinon retourne "http"
        ."://$_SERVER[HTTP_HOST]"                 # SuperGlobale qui contient le nom d'hôte du serveur où le script est exécuté
        .dirname($_SERVER['PHP_SELF']).''))      # Fonction qui renvoie le chemin du répertoire contenant le script PHP en cours d'exécution
); 
# Cette ligne de code définit une constante "URL" qui contient l'URL de base de l'appli, en supprimant les parties "public/" et "index.php" de l'URL, 
#en fonction du protocole utilisé (HTTP ou HTTPS) et du nom d'hôte du serveur


define('VIEWS_PATH',__DIR__.'/../App/Views/');

/*
var_dump(URL);

var_dump(__DIR__);
var_dump(VIEWS_PATH);
*/

$users= new LoginController();
$admin= new AdminController();
$employee= new EmployeeController();
$userController = new UserController();

try {
    if(empty($_GET["page"])){
        $users->authentication();
    } else {
        $url=explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));  # Cette ligne prends l'url et decoupe au niveau des /, cela à pour but de travailler avec les differents elements de notre URL . Ex : localhost:/tltleave/login
        var_dump($url);
        switch ($url[0]){
            case "login":
                $users->authentication();
            case "passwordforgot":
                $users->passwordForgot();
                break;
            case "resetpassword":
                $users->resetPassword();
                break;
            case "dashboard":
                $admin->dashboard();
                break;
            case "usermanagement":
                $admin->userManagement();
                break;
            case "treatmentrequests":
                $admin->treatmentRequests();
                break;
            case "statistics":
                $admin->statistics();
                break;
            case "calendar":
                $admin->calendar();
                break;
            case "addUsers":
                $admin->addUsers();
                break;
            case "dashboardemployee":
                $employee->dashboardEmployee();
                break;
            case "statusrequests":
                $employee->statusRequests();
                break;
            case "leaverequests":
                $employee->leaveRequests();
                break;
            case 'submitusers':
                $userController->add();
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $exception) {
    $error=$exception->getMessage();
    include VIEWS_PATH."error.view.php";
}

