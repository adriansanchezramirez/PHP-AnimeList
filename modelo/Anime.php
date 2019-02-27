<?php
require_once "Database.php" ;

class Anime {
    private $idAni ;
    private $nombre ;
    private $nepi ;
    private $categoria ;
    private $descripcion ;
    private $caratula ;

    public function __construct(){}

    //SETTER
    public function setIdAni($dta)       {$this->idAni = $dta;}
    public function setNombre($dta)      {$this->nombre = $dta;}
    public function setNepi($dta)        {$this->nepi = $dta;}
    public function setCategoria($dta)   {$this->categoria = $dta;}
    public function setDescripcion($dta) {$this->descripcion = $dta;}
    public function setCaratula($dta)    {$this->caratula = $dta;}
    

    //GETTER
    public function getIdAni()       {return $this->idAni;}
    public function getNombre()      {return $this->nombre;}
    public function getNepi()        {return $this->nepi;}
    public function getCategoria()   {return $this->categoria;}
    public function getDescripcion() {return $this->descripcion;}
    public function getCaratula()    {return $this->caratula;}

    public static function getAllAnime(){
        $bd = Database::getInstance() ;
        $bd->doQuery("SELECT * FROM anime ORDER BY nombre;") ;

        $datos = [] ;

        while($item = $bd->getRow("Anime")){
            array_push($datos,$item);
        }
 
        return $datos;
    }

    
}

?>