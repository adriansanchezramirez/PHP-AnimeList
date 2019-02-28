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

        public function create()
        {
            if(isset($_GET["nom"])):
                $anime = new Anime();
                $anime->setNombre($_GET["nom"]) ;
                $anime->setNepi($_GET["nepi"]) ;
                $anime->setCategoria($_GET["cat"]) ;
                $anime->setDescripcion($_GET["descr"]) ;
                $anime->setCaratula($_GET["car"]) ;

                $anime->insert() ;
                header("location: index.php?mod=anime&ope=aniadir") ;
            else:
                require_once "vista/create.anime.php" ;
            endif;
        }

        public function delete(){
			if (isset($_GET["idAni"])) {
				Anime::delete($_GET["idAni"]) ;

				header("Location: index.php?mod=anime&ope=index");
			} else {
				header("Location: index.php?mod=anime&ope=index");
			}
        }
        
        public function update(){
			
			$id = $_GET["idAni"] ?? "" ;

			if (!empty($id)) {

				$anime = Anime::getAnime($id) ;

				if (isset($_GET["nom"])) {

                    $anime->setNombre($_GET["nom"]) ;
                    $anime->setNepi($_GET["nepi"]) ;
                    $anime->setCategoria($_GET["cat"]) ;
                    $anime->setDescripcion($_GET["descr"]) ;
                    $anime->setCaratula($_GET["car"]) ;

					$anime->update() ;

					header("Location: index.php?mod=anime&ope=index");

				} else {
					//
                    $nombre = $anime->getNombre() ;
                    $nepi = $anime->getNepi() ;
                    $categoria = $anime->getCategoria() ;
                    $descripcion = $anime->getDescripcion() ;
                    $caratula = $anime->getCaratula() ;

					require_once "vista/update.anime.php" ;
				}

			} else {
				//
				header("Location: index.php?mod=anime&ope=index");
			}
		}
       
}
?>