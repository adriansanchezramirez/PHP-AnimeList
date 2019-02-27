<?php

require_once "modelo/Usuario.php" ;
require_once "modelo/Sesion.php" ;

    class controllerUsuario{

        private $sesion;

        public function __construct(){
            $this->sesion = new Sesion() ;
        }
        
            public function sigin(){
            
                
                if(isset($_SESSION["nombre"])){
                    header("Location: index.php?mod=anime&ope=aniadir");
                }
                
                if($_SERVER["REQUEST_METHOD"] == "GET") {
    
                   
   
                    if(isset($_GET["nom"]) && isset($_GET["pass"])){
                        $nombre   = $_GET["nom"];
                        $password = $_GET["pass"];
                   
                        $db = Database::getInstance();
    
                        $db->doQuery("SELECT * FROM usuario WHERE nombre=:nom AND password=:pass;",
                                        [":nom" => $nombre,
                                         ":pass" => $password]);
                
                        $resultado = $db->getRow();

                        
                     
                        if ($resultado!== false) {
                            $_SESSION["nombre"]=$nombre;
                            header("Location: index.php?mod=anime&ope=aniadir");
                            
                        }else{
                            require_once "vista/index.login.php";
                            echo "El nombre o la contraseña no es correcta";
                        
                        }
                    } else{
                        require_once "vista/index.login.php";
                    }
                }
            }

            public function logout(){
                $this->sesion->close();
                header("Location: index.php?mod=anime&ope=index") ;
            }

        public function create()
        {
            if(isset($_GET["nom"])):
                $usuario = new Usuario();
                $usuario->setNombre($_GET["nom"]) ;
                $usuario->setPassword($_GET["pass"]) ;
                $usuario->setEmail($_GET["ema"]) ;

                $usuario->insert() ;
                header("location: index.php?mod=anime&ope=index") ;
            else:
                require_once "vista/create.usuario.php" ;
            endif;
        }
    }
