<?php

include_once __DIR__ . "/../helpers.php";

$email = $_POST['email'] ?? null;
$pass = $_POST['password'] ?? null;

$pdo = getPDO();


$stmt = $pdo -> prepare("SELECT * FROM users WHERE `email` = :email ");

$stmt->execute(['email' => $email]);
$res = $stmt->fetch(\PDO::FETCH_ASSOC);

if(!$res){
    setMsg('error', "User $email not found");
    redirect('/mvc_php/index.php');
}else{
    echo $email;
}