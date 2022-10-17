<?php

class UserSession{

    function __construct(){
        session_start();
    }
    
    function setUser($user){
        $_SESSION['user'] = $user;
    }

    function getUser(){
        return $_SESSION['user'];
    }

    function closeSession(){
        session_unset();
        session_destroy();
    }
}