<?php
    include APP.'/config.php';
    include 'schema.php';
    $db=connectMysql($dsn, $dbuser, $dbpass);
    $name = filter_input(INPUT_POST,"nombre");
    $pass = filter_input(INPUT_POST,"password");
    $reg = filter_input(INPUT_POST,"reg");

    $login=iniciarS($db,$name,$pass,$reg);
    switch($login){
        case "log":
            header("Location:?url=login_s");
        break;
        case "no_log":
            header("Location:?url=login");
        break;
        case "reg":
            setcookie("nombre",$name);
            header("Location:?url=register");
        break;
    }

