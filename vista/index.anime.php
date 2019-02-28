<?php  
//iniciamos session
$sesion=session_start();
if (isset($_SESSION["nombre"])){
	header("Location: index.php?mod=anime&ope=aniadir");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/estilo.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
    <title>Lista de Anime</title>
</head>
<body>
    <div id="marco">
			<div id="inicio"><a href="index.php?mod=usuario&ope=sigin">Iniciar Sesion</a></div>
            <div id="inicio"><a href="index.php?mod=admin&ope=sigin">Admin</a></div>
			<div id="registro"><a href="index.php?mod=usuario&ope=create">Registrarse</a></div>
		</div>

    <h1>Lista de Anime</h1><br>
    
    
    <?php
        foreach($datos as $item){
    ?>
    
    <div id="total">
        <div id="caratula"><img width="260px" height="370px" src="<?=$item->getCaratula();?>"></div>
        <p class="nom">Nombre:</p><div id="nombre"><?=$item->getNombre();?></div>
        <p class="np">Numero Episodios:</p><div id="nepi"><?=$item->getNepi();?></div>
        <p class="cate">Categoria:</p><div id="categoria"><?=$item->getCategoria();?></div>
        <p class="desc">Sinopsis:</p><div id="descripcion"><?=$item->getDescripcion();?></div>
        </div>
    <?php
        }
    ?>
    

    
</body>
</html>