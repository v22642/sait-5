<?php
session_start();

require 'conect.php';
    $qu=$pdo->query('SELECT * FROM `e2`');
    while($row = $qu->fetch(PDO::FETCH_OBJ)){
    
        echo'<div class="call">';
        echo'<span id="txtEmail"> Имя:'.$row->name.'</span><br>';
        echo'<span id="txtEmail">email:'.$row->email.'</span><br>';

        echo'<span id="txtEmail">Описание:'.$row->description.'</span><br>';

        echo'<button class="ror" id="btnTeacher">написать</button>';
        
        
        echo'</div>';

    }

