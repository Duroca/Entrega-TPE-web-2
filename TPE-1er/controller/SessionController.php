<?php

class SessionController{

    function __construct(){

    }

    function UserExists($user, $pass){
        //Codigo..

        //
    }

    function IsAdmin($user, $pass){
        return (($user == 'admin') && ($pass == 'admin'));
    }

}