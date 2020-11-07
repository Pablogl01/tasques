<?php

    function connectMysql(string $dns, string $userdb, string $passdb){
        try{
            $db = new PDO($dns,$userdb,$passdb);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die( $e->getMessage());
        }
        return $db;
    }