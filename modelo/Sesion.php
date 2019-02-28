<?php

class Sesion{
    
    public function init(){
        session_start();
    }

    public function get($key){
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null ;
    }

    public function close(){
        session_unset();
        session_destroy() ;
    }

    public function getStatus(){
        return session_status();
    }
}