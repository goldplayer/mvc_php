<?php


error_reporting(E_ALL);
ini_set('display_errors',1);

require_once 'app/models/DataBase.php';
require_once 'app/models/User.php';
require_once 'app/controllers/users/AuthController.php';
require_once 'app/controllers/users/UserController.php';


$router = new Router();
$router->run();


