<?php
    require APP.'/src/render.php';
    $user=$_SESSION['name'] ?? ''; //?? = si no esta definido = ''
    echo render('task',['user'=>'Usuario '.$user]);