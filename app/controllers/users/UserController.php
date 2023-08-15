<?php
require_once 'app/models/User.php';
class UserController{
    public function index(){
        $userModel = new User();
    }
}