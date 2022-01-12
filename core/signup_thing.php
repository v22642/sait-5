<?php
session_start();//ЗДЕСЬ ОНА НУЖНА ДЛЯ ОШИБАК И СООБШЕНИИ 
require 'conect.php';

$thing = $_POST['thing'];





    if($item ==null){

            
     
    
       
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $pdo->prepare("INSERT INTO thing(name) VALUES(:thing)");
        $data->bindParam(":thing", $thing, PDO::PARAM_STR);
        

        $data->execute();
        // СООБЩЕНИЯ УСПЕШНОЙ РЕГИСТРАЦИИ
        $_SESSION['message'] = 'добавлин предмет';
        header('Location: ../menu_add_thing_.php');
    }
    else{
        // ОШИБКА ПОРОЛЯ 
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../menu_add_thing_.php');
        
    }
    

