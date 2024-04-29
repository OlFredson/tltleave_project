<?php
require_once "../App/Controllers/Connexion/LoginController.php";
# Inclus le fichier LoginController.php dans le script. Si il n'est pas trouvé, une erreur fatale sera affiché et le script s'arrete immediatement.
define('URL',str_replace("public/","",            # Fonction qui supprime "public/" de l'URL de base
        str_replace("index.php","",               # Fonction qui supprime "index.php" de l'URL de base
        (isset($_SERVER["HTTPS"])?"https":"http") # Opération ternaire qui vérifie si le protocole HTTPS est utilisé. S'il est défini, retourne "https", sinon retourne "http"
        ."://$_SERVER[HTTP_HOST]"                 # SuperGlobale qui contient le nom d'hôte du serveur où le script est exécuté
        .dirname($_SERVER['PHP_SELF']).'/'))      # Fonction qui renvoie le chemin du répertoire contenant le script PHP en cours d'exécution
); 
# Cette ligne de code définit une constante "URL" qui contient l'URL de base de l'appli, en supprimant les parties "public/" et "index.php" de l'URL, en fonction du protocole utilisé (HTTP ou HTTPS) et du nom d'hôte du serveur

define('VIEWS_PATH',__DIR__);

/*var_dump(VIEWS_PATH);*/

$login= new LoginController();

if(empty($_GET["page"])){
    $login->authentication();
}

