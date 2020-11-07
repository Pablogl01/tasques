<?php
    ini_set('display_errors','On');
    session_start();
    define('APP',__DIR__);
    require APP.'/src/route.php';
    require APP.'/start.php';
    $controller=getRoute();//http://app/?url=login -> va pa login
    require APP.'/controllers/'.$controller.'.php';