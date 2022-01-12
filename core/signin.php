<?php
session_start();
require 'conect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$password =md5($password);

$check_user = $pdo -> query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
$user = $check_user->fetch(PDO::FETCH_ASSOC);
if($user != null){
    $_SESSION['user']=[
        "id"=>$user['id'],
        "lоgin" => $user['lоgin'],
        "email" => $user['email'],
        "avatar" =>$user['avatar'],
        "user" =>$user['user']

    ];
    header('Location: ../index.php');
}
else{
    $_SESSION['message'] = 'нет такой учётки';
     header('Location: ../authorization.php');
}