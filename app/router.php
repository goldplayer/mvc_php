<?php

class Router {
    public function run(){
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page){

            case 'users':
                $controller = new UserController();
                $controller->index();
                break;
            default:
                http_response_code(404);
                echo 'page not found - sorry';
                break;
        }

    }
}