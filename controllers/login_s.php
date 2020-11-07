<?php
    require APP.'/src/render.php';
    $user=$_SESSION['uname'] ?? ''; //?? = si no esta definido = ''
    echo render('login_s',['user'=>'Usuario '.$user]);
