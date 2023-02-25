<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }
    
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function setCurrentRol($rol){
        $_SESSION['rol'] = $rol;
    }

    public function getCurrentRol(){
        return $_SESSION['rol'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>