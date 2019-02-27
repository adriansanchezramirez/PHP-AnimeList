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
</head>
<body>
<div id="marco">
            <div id="inicio"><a href="index.php?mod=usuario&ope=sigin">Iniciar Sesion</a></div>
            <div id="animelist"><a href="index.php?mod=anime&ope=index">Lista de Anime</a></div>
        </div>
        

        <div class="panel panel-login">
    <div class="panel-heading">
    <h1>Registrando Nuevo Usuario</h1><br>
    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <form id="login-form" action="index.php" method="GET" role="form" style="display: block;">
                <input id="mod" name="mod" type="hidden" value="usuario">
                <input id="ope" name="ope" type="hidden" value="create">
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Nombre" value="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ema" id="ema" tabindex="1" class="form-control" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Registrarse">
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