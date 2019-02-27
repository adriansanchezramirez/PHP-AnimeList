<?php
require_once "modelo/Anime.php" ;
require_once "modelo/Sesion.php" ;

class controllerAnime{

    private $sesion;

    public function __construct(){
        
    }

        public function index(){

            $datos = Anime::getAllAnime() ;
            require_once "vista/index.anime.php" ;
        }

        public function aniadir(){
            $datos = Anime::getAllAnime() ;
            require_once "vista/aniadir.anime.php" ;
        }

        public function prueba(){
            require_once "vista/prueba.anime.php";
        }
}


// $this->sesion = new Sesion() ;
//             $this->sesion->init() ;
//             if($this->sesion->getStatus() === 1 || empty($this->sesion->get("nombre")))
//                 exit("Acceso denegado");
?>