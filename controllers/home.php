<?php
    require APP.'/src/render.php';
    $uname=$_SESSION["uname"] ?? ''; //?? = si no esta definido = ''
    echo render('home',['title'=>'Todo '.$uname]);