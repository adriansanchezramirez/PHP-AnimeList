<?php

require_once "modelo/Admin.php" ;
require_once "modelo/Sesion.php" ;

    class controllerAdmin{

        private $sesion;

        public function __construct(){
            $this->sesion = new Sesion() ;
        }
        
            public function sigin(){
            
                
                if(isset($_SESSION["nombre"])){
                    header("Location: index.php?mod=admin&ope=index");
                }
                
                if($_SERVER["REQUEST_METHOD"] == "GET") {
    
                   
   
                    if(isset($_GET["nom"]) && isset($_GET["pass"])){
                        $nombre   = $_GET["nom"];
                        $password = $_GET["pass"];
                   
                        $db = Database::getInstance();
    
                        $db->doQuery("SELECT * FROM admin WHERE nombre=:nom AND password=:pass;",
                                        [":nom" => $nombre,
                                         ":pass" => $password]);
                
                        $resultado = $db->getRow();
                        $this->sesion->init();
                       
                        
                     
                        if ($resultado!== false) {
                            $_SESSION["nombre"]=$nombre;
                            header("Location: vista/index.admin.php");
                            
                        }else{
                            require_once "vista/admin.login.php";
                            echo "El nombre o la contraseña no es correcta";
                        
                        }
                    } else{
                        require_once "vista/admin.login.php";
                    }
                }
            }

            public function logout(){
                session_start();
                session_unset();
                session_destroy();
                header("Location: index.php?mod=admin&ope=sigin") ;
            }
        }