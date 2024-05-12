<?php

/*namespace App\Controllers;*/

class MethodRender{
    public function render(string $viewName, array $data=[]){
        ob_start();
        extract($data);
        $title=$data['title'];
        include VIEWS_PATH.$viewName.'.php';
        $content=ob_get_clean();
        if (strpos($viewName,"Admin/") === 0){
            include VIEWS_PATH."templateAdmin.view.php";
        } elseif (strpos($viewName,"Connexion/")=== 0) {
            include VIEWS_PATH."templateConnexion.view.php";
        } else {
            include VIEWS_PATH."templateEmployee.view.php";
        }
    }
}