<?php
require_once "modelo/ListaAnime.php" ;

class controllerLista{

    public function __construct(){}

    public function create(){
        if(isset($_GET["idu"])):
            $lista = new ListaAnime();
            $lista->setIdUsu($_GET["idu"]) ;
            $lista->setIdAni($_GET["ida"]) ;

            $lista->insert() ;
        else:
            require_once "vista/aniadir.anime.php" ;
        endif;
    }
    
    
}

?>