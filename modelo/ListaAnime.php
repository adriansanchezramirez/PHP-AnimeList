<?php
require_once "Database.php" ;

class ListaAnime{

    private $idUsu ;
    private $idAni ;

    public function __construct(){}

    //SETTER
    public function setIdUsu($dta)       {$this->idUsu = $dta;}
    public function setIdAni($dta)       {$this->idAni = $dta;}
    

    //GETTER
    public function getIdUsu()       {return $this->idUsu;}
    public function getIdAni()       {return $this->idAni;}

    public function insert(){
        $bd = Database::getInstance();
        $bd->doQuery("INSERT INTO listanime(idUsu,idAni) VALUES (:idu, :ida);",
        [":idu"=>$this->idUsu,
         ":ida"=>$this->idAni]) ;
    }

    public function getallAnimeByUsuario(){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT a.nombre, a.nepi, a.categoria,a.descripcion FROM listanime AS L, anime AS A, usuario AS U WHERE L.idUsu=U.idUsu AND L.idAni=A.idAni;") ;

        $valor = [] ;

        while($obj = $bd->getRow("ListaAnime")){
            array_push($valor,$obj);
        }
 
        return $datos;
    }

    
    
    
}
