<?php  
//iniciamos session
$sesion=session_start();
if (!isset($_SESSION["nombre"])){
	header("Location: index.php?mod=anime&ope=index");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear Nuevos Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/estilo.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
</head>
<body>
<div id="marco">

            <div id="animelist"><a href="index.php?mod=anime&ope=index">Lista de Anime</a></div>
        </div>
        

        <div class="panel panel-login">
    <div class="panel-heading">
    <h1>Registrando Nuevo Anime</h1><br>
    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <form id="login-form" action="index.php" method="GET" role="form" style="display: block;">
                <input id="mod" name="mod" type="hidden" value="anime">
                <input id="ope" name="ope" type="hidden" value="create">
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Nombre" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nepi" id="nepii" tabindex="1" class="form-control" placeholder="Episodios" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cat" id="cat" tabindex="1" class="form-control" placeholder="Categoria" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="descr" id="descr" tabindex="1" class="form-control" placeholder="Descripción" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="car" id="car" tabindex="1" class="form-control" placeholder="Ruta de la Caratula" value="">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Agregar">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            </form>
</body>
</html>