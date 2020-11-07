<?php
    require APP.'/src/render.php';
    $user=$_SESSION['name'] ?? ''; //?? = si no esta definido = ''
    $id = filter_input(INPUT_POST,"id");
    $_SESSION['idIt'] = $id;
    echo render('verItems',['user'=>'Usuario '.$user]);