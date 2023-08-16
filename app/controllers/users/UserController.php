<?php
require_once 'app/models/User.php';


class UserController{


    public function index(){

        $userModel = new User();
        $users = $userModel->readAll();

        include 'app/views/users/index.php';

    }
}