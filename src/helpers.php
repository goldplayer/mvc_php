<?php
session_start();

function redirect($path){
    header("Location: $path");
    die();
}

function hasValiddationError($filedName){
    return isset($_SESSION['validation'][$filedName]);
}

function validationErrorAttr($filedName){
    echo isset($_SESSION['validation'][$filedName]) ? 'aria-invalid = "true"' : '';
}

function validationErrorMessage($filedName){
    echo $_SESSION['validation'][$filedName] ??  '';
}