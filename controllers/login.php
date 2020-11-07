<?php
    require APP.'/src/render.php';
    $user=$_SESSION['uname'] ?? ''; //?? = si no esta definido = ''
    echo render('login',['user'=>'Usuario '.$user]);
