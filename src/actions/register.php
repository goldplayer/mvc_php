<?php

include_once __DIR__ . "/../helpers.php";


$avatar_Path = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;
addOldValue('name', $name);
addOldValue('email', $email); 





// $_SESSION['validation']=[];

if(empty($name)){
    addValidationError('name', 'Incorrect name');
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    addValidationError('email', 'Incorrect Email');
}

if(empty($password)){
    addValidationError('password', 'Empty Password');
}

if($password !== $passwordConfirmation){
    addValidationError('password', 'Password is not ');
}

if(!empty($avatar)){
    $types = ['image/jpeg', 'image/png'];

    if(!in_array($avatar['type'], $types)){
        addValidationError('avatar', 'Image has incorrect type, pls downloading only png or jpeg');
    }

    if(($avatar['size'] / 1000000) >=1){
        addValidationError('avatar', 'Your`s image to big');
    }
}

if(!empty($avatar)){
    $avatar_Path = uploadFile($avatar, 'avatar');
}

$pdo = getPDO();

$query = "INSERT INTO users(name, email, avatar, password) VALUES(:name, :email, :avatar, :password)";
$params =[
    'name'=>$name,
    'email'=>$email,
    'avatar'=>$avatar_Path,
    'password'=>password_hash($password, PASSWORD_BCRYPT)
];

$stmt = $pdo->prepare($query);
    try{
        $stmt->execute($params);
    }catch(\PDOException $e){
        die($e->getMessage());
    }

    redirect('mvc_php/index.php');
// if(!empty($_SESSION['validation'])){
//     redirect('/mvc_php/register.php');
// }




