<?php

$host = '127.0.0.1';
$username = 'root';
$password = '';
$db_name = 'test';

$conn = new mysqli($host, $username, $password, $db_name);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>