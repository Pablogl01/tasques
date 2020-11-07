<?php
    require APP.'/src/render.php';
    $user=$_SESSION['name'] ?? ''; //?? = si no esta definido = ''
    echo render('register',['user'=>'Usuario '.$user]);
