<?php
require 'conect.php';

//Защита от вредоносных символов
function protect($var){
	$var = trim($var);
	$var = strip_tags($var);
	
	return $var;
}

$name = protect($_POST['name']);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $pdo->prepare("INSERT INTO rrr(name) VALUES(:name)");

    $data->bindParam(":name", $name, PDO::PARAM_STR);
    $data->execute();