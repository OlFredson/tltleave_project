<?php

/*namespace src\app\Controllers\Connexion;*/

class EmpoyeeController {

    public function dashboard() {
        $this->render("template");
    }


    public function render($viewName) {
        include '..App/Views/'.$viewName.'.php';
    }
    /**public function login(): void{
        $title = "Authentification";
        $this->render("Visitor/login.view", [
            "title"=>$title
    ]);
    }

    public function render(string $viewName,array $data=[]): void
    {
        ob_start();
        extract($data);
        include VIEWS_PATH.$viewName.".php";
        $content=ob_get_clean();
        include VIEWS_PATH."template.php";
    }*/
}
