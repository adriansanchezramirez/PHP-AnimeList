<?php

require_once "Database.php" ;

    class Usuario{

        private $idUsu    ;
        private $nombre   ;
        private $password ;
        private $email    ;

        public function __construct(){}

        //SETTER
        public function setIdUsu($dta)     {$this->idUsu = $dta;}
        public function setNombre($dta)    {$this->nombre = $dta;}
        public function setPassword($dta)  {$this->password = $dta;}
        public function setEmail($dta)     {$this->email = $dta;}

        //GETTER
        public function getIdUsu()      {return $this->idUsu;}
        public function getNombre()     {return $this->nombre;}
        public function getPassword()   {return $this->password;}
        public function getEmail()      {return $this->email;}

        public function insert(){
            $bd = Database::getInstance();
            $bd->doQuery("INSERT INTO usuario(nombre, password, email) VALUES (:nom, :pass, :ema);",
            [":nom"=>$this->nombre,
             ":pass"=>$this->password,
             ":ema"=>$this->email]) ;
        }

        
    }
?>