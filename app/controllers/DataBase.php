<?php

namespace App\controllers;

class DataBase
{
    private static $instance = null;

    private $conn;
    private $host;
    private $user_name;
    private $user_password;
    private $db_name;

    /**
     * @param $conn
     * @param $host
     * @param $user_name
     * @param $user_password
     * @param $db_name
     */
    public function __construct($conn, $host, $user_name, $user_password, $db_name)
    {
        $this->conn = $conn;
        $this->host = $host;
        $this->user_name = $user_name;
        $this->user_password = $user_password;
        $this->db_name = $db_name;

        if($this->conn->connect_error){
            die('Connection closed -> ERROR');
        }

    }


}