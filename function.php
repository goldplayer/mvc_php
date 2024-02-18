<?php
session_start();
require 'db.php';

if ($_POST['email']) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    
    $stmt = $conn->prepare("INSERT INTO users(name, email, password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $pass);
    $stmt->execute();
    
    $data_for_logs = "Дата: " . date("Y-m-d H:i:s") . "\nИмя: " . $name . "\nEmail: " . $email . "\nПароль: " . $pass . PHP_EOL;
    
    if ($stmt->affected_rows > 0) {
        file_put_contents("logs/login.logs", $data_for_logs, FILE_APPEND);
        echo json_encode(["status" => "Ok!", "name" => $name]);
    } else {
        echo json_encode(["status" => "Error", "message" => $conn->error]);
    }
    
    $stmt->close();
}


?>