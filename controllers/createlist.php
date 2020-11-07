<?php
    include APP.'/config.php';
    include 'schema.php';
    $name = filter_input(INPUT_POST,"tableName");
    $list_data = filter_input(INPUT_POST,"list-start");
    $userT = $_SESSION['id'];

    $data = [$name,$userT,$list_data];

    if($name == "" or $list_data==null){
        header("Location:?url=task");
        
    }
    else{
        $create_list=insertLista($db,$data);
        header("Location:?url=task");
    }
    