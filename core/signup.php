<?php
session_start();//ЗДЕСЬ ОНА НУЖНА ДЛЯ ОШИБАК И СООБШЕНИИ 
require 'conect.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$p = strlen($password);


if($p>=8){

    if($password === $password_confirm){

        

        if($_FILES['ava']['name'] != null){
            $x = '../images/avatars/'.time().$_FILES['ava']['name'];
        }
        else{
            $x = null;
        }
        
        
        if($x!=null){
            if(!move_uploaded_file($_FILES['ava']['tmp_name'], $x)){
                $_SESSION['massage']='фаил не загружается';
                header('Location: ../registration.php');
            }
        }
            
        $password=md5($password);
    
        $users=0;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $pdo->prepare("INSERT INTO users(login, password , email, avatar , user) VALUES(:login, :password, :email, :avatar ,:user)");
        $data->bindParam(":login", $login, PDO::PARAM_STR);
        $data->bindParam(":password",$password,PDO::PARAM_STR);
        $data->bindParam(":email",$email,PDO::PARAM_STR);
        $data->bindParam(":avatar",$x,PDO::PARAM_STR);
        $data->bindParam(":user",$users,PDO::PARAM_STR);

        $data->execute();
        // СООБЩЕНИЯ УСПЕШНОЙ РЕГИСТРАЦИИ
        $_SESSION['message'] = 'ты зареган(а)';
        header('Location: ../authorization.php');
    }
    else{
        // ОШИБКА ПОРОЛЯ 
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registration.php');
        
    }
    $_SESSION['message'] = '(а)';
    header('Location: ../authorization.php');
}
else{
    // ОШИБКА ПОРОЛЯ 
    $_SESSION['message'] = 'Пароли должен быть больше 8 символов';
    header('Location: ../registration.php');
    
}
unset($x);