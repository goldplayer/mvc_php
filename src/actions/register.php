<?php

include_once __DIR__ . "/../helpers.php";



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['password_confirmation'];


$_SESSION['validation']=[];

if(empty($name)){
    $_SESSION['validation']['name'] = 'Incorrect Name';
}

if(!empty($_SESSION['validation'])){
    redirect('/mvc_php/register.php');
}

