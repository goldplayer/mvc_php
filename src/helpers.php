<?php
session_start();

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

    $path = "$img_path/$fileName";
    if(!move_uploaded_file($file['tmp_name'], $path )){
        die('Error downloading');
    }

    return $path;
}

// function clearOldValue(): void{
//     $_SESSION['old']=[];
// }