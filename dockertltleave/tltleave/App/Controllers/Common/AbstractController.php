<?php

namespace App\Controllers\Common;

class AbstractController {

    /**
     * Affiche une vue avec des données passées en paramètre.
     * Le choix du template dépend du préfixe du nom de la vue.
     * @param string $viewName Le nom de la vue à afficher.
     * @param array $data Les données à passer à la vue.
     */
    public function render(string $viewName, array $data=[]): void {
        // Démarrage de la temporisation de sortie.
        ob_start();
        // Extraction des données pour les rendre disponibles dans la vue.
        extract($data);
        // Récupération du titre de la vue.
        $title = $data['title'];
        // Inclusion de la vue.
        include VIEWS_PATH . $viewName . '.php';
        // Récupération du contenu généré.
        $content = ob_get_clean();
        // Choix du template en fonction du préfixe du nom de la vue.
        if (strpos($viewName, "Admin/") === 0) {
            include VIEWS_PATH . "Admin/templateAdmin.view.php";
        } elseif (strpos($viewName, "Connexion/") === 0) {
            include VIEWS_PATH . "Connexion/templateConnexion.view.php";
        } else {
            include VIEWS_PATH . "Employee/templateEmployee.view.php";
        }
    }

    /**
     * Redirige vers une route spécifiée.
     * @param string $route La route vers laquelle rediriger.
     */
    public function redirecToRoute(string $route): void {
        // Redirection vers la route spécifiée.
        header("Location:" . URL . $route);
        // Arrêt du script.
        exit();
    }
}
