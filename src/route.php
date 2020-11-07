<?php

    function getRoute():string{
        if(isset($_REQUEST['url'])){
            $url=$_REQUEST['url'];
        }else{
            $url="home";
        }
        switch($url){
            case 'login':
                return 'login';
            case 'register':
                return 'register';
            case 'regaction':
                return 'regaction';
            case 'logaction':
                return 'logaction';
            case 'logout':
                return 'logout';
            case 'login_s':
                return 'login_s';
            case 'task':
                return 'task';
            case 'createlist':
                return 'createlist';
            case 'sendview':
                return 'sendview';
            case 'insertItems':
                return 'insertItems';
            case 'editI':
                return 'editI';
            default:
                return 'home';
        }
    }