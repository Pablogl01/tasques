<?php

    function recogerDatos($db,$table,array $archivo){
        if(isset($archivo)){
            $datos = implode(',',$archivo);
        }else{
            $datos = '*';
        }
        $command = "
            SELECT {$datos} FROM {$table}";
        try{
            $result = $db->prepare($command);
            $result -> execute();
            $selects = $result->fetchAll(PDO::FETCH_ASSOC);
            return $selects;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function iniciarS(PDO $db,$nombre,$password,$quieroR){
        $command2="
        SELECT * FROM users WHERE uname = '$nombre'";
        try{
            $resultL = $db->prepare($command2);
            $resultL->execute();
            $countL = $resultL->rowcount();
            $comprob = $resultL->fetchAll();
            echo $nombre;

            if($countL>0){
                $passv = $comprob[0];
                $con = password_verify($password,$passv['passw']);
                if($con){
                    if($quieroR==true){
                        return "no_log";
                    }
                    else{
                        $_SESSION["uname"]=$nombre;
                        $_SESSION["id"]=$passv['id'];
                        return "log";
                    }
                }
                else{
                    return "no_log";
                }
            }
            else{
                if ($quieroR){
                    return "reg";
                }
                else{
                    return "no_log";
                }
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function añadirUser(PDO $db,array $archivo){
        if(isset($archivo)){
            //$datos = implode(',',$archivo);
            $email = $archivo[0];
            $name = $archivo[1];
            $pass = $archivo[2];
            $role = $archivo[3];
        }else{
            $datos = '*';
        }
        $command3 = "
            INSERT INTO users (email,uname,passw,role) VALUES ('$email','$name','$pass',$role)";
        try{
            $result = $db->prepare($command3);
            $result -> execute();
            return true;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function selectLista(PDO $db,$id){
        $command4="
        SELECT * FROM task WHERE user = '$id'";
        try{
            $result = $db->prepare($command4);
            $result->execute();
            $count = $result->rowcount();
            $comprobT = $result->fetchAll();
            if(empty($comprobT)){
                return "No hay listas para enseñarte";
            }
            else{
                foreach($comprobT as $fila){
                        $idT = $fila['id'];
                        echo "<p id='lista'>".$fila['description']." | ";
                        echo substr($fila['due_date'],0,-9)."</p><form action='?url=sendview' method='post'> <button type='submit' value='$idT' name='id'>Ver Lista</button> </form>";
                }
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function insertLista(PDO $db,array $datosTask){
            $des = $datosTask[0];
            $usr = $datosTask[1];
            $date = $datosTask[2];
        $command5="
        insert into task (description,user,due_date) values ('$des','$usr','$date')";
        try{
            $resultT = $db->prepare($command5);
            $resultT->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function verItems(PDO $db,$tab){
    $command5="
    SELECT * FROM task_item where task = '$tab'";
        try{
            $resultIT = $db->prepare($command5);
            $resultIT->execute();
            $comprobIT = $resultIT->fetchAll();
                if(empty($comprobIT)){
                    return "No hay listas para enseñarte";
                }
                else{
                    foreach($comprobIT as $filaIT){
                        $idIT = $filaIT['id'];
                        echo "<div id='item'><p id='lista'>".$filaIT['item']." | ";
                        if($filaIT['completed']){
                            echo "hecho</p><form action='?url=editI' method='post'> <button type='submit' value='$idIT' name='idIT'>Editar item</button> </form><div>";
                        }
                        else{
                            echo "por hacer</p><form action='?url=editI' method='post'> <button type='submit' value='$idIT' name='idIT'>Editar item</button> </form><div>";
                        }
                    }
                }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }   

    function insertItem(PDO $db,array $datosItem){
        $item = $datosItem[0];
        $task = $datosItem[1];
        
        $command6="
            insert into task_item (item,completed,task) VALUES ('$item',false,'$task')";
        try{
            $resultIT = $db->prepare($command6);
            $resultIT->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    