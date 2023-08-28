<?php

use App\models\DataBase;

class User{

    private $database;

    public function __construct()
    {
        $this->database = DataBase::getInstance()->get_Conn();
    }

    public function readAll(){
        $result = $this->db->query("SELECT * FROM `users`");

        $users = [];

        while($row = $result->fetch_assoc()){
            $users = $row;
        }

        return $users;
    }
}