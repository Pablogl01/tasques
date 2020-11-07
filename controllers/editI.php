<?php
    include APP.'/config.php';
    include 'schema.php';
    $name = filter_input(INPUT_POST,"name");

    if($name == "" or $list_data==null){
        header("Location:?url=verItems");
        
    }
    else{
        $create_list=insertItem($db,$data);
        header("Location:?url=verItems");
    }