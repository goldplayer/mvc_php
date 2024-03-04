<?php
session_start();

require_once 'config.php';
function redirect($path){
    header("Location: $path");
    die();
}

function  addValidationError($filedName, $message){
    $_SESSION['validation'][$filedName]=$message;
}

function hasValidationError($filedName): bool{
    return isset($_SESSION['validation'][$filedName]);
}


function validationErrorAttr($filedName){
    echo isset($_SESSION['validation'][$filedName]) ? 'aria-invalid = "true"' : '';
}


function validationErrorMessage($filedName){
    $message = $_SESSION['validation'][$filedName] ??  '';
    unset($_SESSION['validation'][$filedName]);
    echo $message;
}
 

function addOldValue($key, $value){
    $_SESSION['old'][$key] = $value;
}

function old($key){
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}


function uploadFile(array $file, $prefix): string{

    $img_path = __DIR__ . '/../uploads';

    if(!is_dir($img_path)){
        mkdir($img_path, 0777, true);
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);

    $fileName = $prefix . '_' . time() . ".$ext";


    if(!move_uploaded_file($file['tmp_name'], "$img_path/$fileName" )){
        die('Error downloading');
    }

    return "uploads/$fileName";
}


function setMsg($key, $msg){
    $_SESSION['msg'][$key]=$msg;
}

function hasMsg($key):bool{
    return isset($_SESSION['message'][$key]);
}

function getMsg($key){
    $msg=$_SESSION['msg'][$key] ?? '';
    unset($_SESSION['msg'][$key]);
    return $msg;

}

function getPDO(): PDO{

    try {
        return new \PDO('mysql:host='. DB_HOST .';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch(\PDOException $e){
        die($e->getMessage());
    }

}