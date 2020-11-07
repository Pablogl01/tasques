<?php

include APP.'/config.php';
require 'schema.php';
$db=connectMysql($dsn, $dbuser, $dbpass);
$name = $_COOKIE['nombre'];
$pass = filter_input(INPUT_POST,"password");
$pass2 = filter_input(INPUT_POST,"password2");
$email = filter_input(INPUT_POST,"email");
$quieroR = false;
$passE = password_hash($pass,PASSWORD_BCRYPT, ['cost'=>4]);
$role = 1;
$data = [$email,$name,$passE,$role];

if($pass == $pass2){
    $qUser = añadirUser($db,$data);
    header("Location:?url=login");
}
else{
    header("Location:?url=register");
}


