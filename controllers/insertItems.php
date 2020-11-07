<?php
    include APP.'/config.php';
    include 'schema.php';
    $name = filter_input(INPUT_POST,"itemName");
    $list = $_SESSION['idIt'];
    $data = [$name,$list];

    if($name == ""){
        header("Location:?url=task");
        
    }
    else{
        insertItem($db,$data);
        header("Location:?url=task");
    }