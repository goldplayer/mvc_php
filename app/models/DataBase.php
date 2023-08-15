<?php

namespace App\models;

class DataBase
{
    private static $instance = null;

    private $conn;
    private $host = 'localhost';
    private $user_name = 'root';
    private $user_password = '';
    private $db_name = 'mvc_system';

    /**
     * @param $conn
     * @param $host
     * @param $user_name
     * @param $user_password
     * @param $db_name
     */
    private function __construct($conn, $host, $user_name, $user_password, $db_name)
    {
      $this->conn = new \mysqli($this->host,$this->user_name,$this->user_password, $this->db_name);
        if($this->conn->connect_error){
            die('Connection closed -> ERROR' . $this->conn->connect_error);
        }

    }

    public static function getInstance(): null
    {
        if(!self::$instance){
            self::$instance = new DataBase();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }








}