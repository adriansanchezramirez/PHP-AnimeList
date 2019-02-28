<?php

require_once "Database.php" ;

    class Admin{

        private $idAdmin    ;
        private $nombre   ;
        private $password ;
 

        public function __construct(){}

        //SETTER
        public function setIdAdmin($dta)     {$this->idAdmin = $dta;}
        public function setNombre($dta)    {$this->nombre = $dta;}
        public function setPassword($dta)  {$this->password = $dta;}


        //GETTER
        public function getIdAdmin()      {return $this->idAdmin;}
        public function getNombre()     {return $this->nombre;}
        public function getPassword()   {return $this->password;}
  
        
       

        
    }
?>