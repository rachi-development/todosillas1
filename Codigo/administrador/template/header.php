<!doctype html>
<html lang="en">
  <head>
    <title>Administrador del sitio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <?php $url="http://".$_SERVER['HTTP_HOST']."/todosillas/codigo" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">ADMINISTRADOR <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/login/admin/admin_portada.php">Gestión de Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Gestión de Productos</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver TODOSILLAS</a>
            <a href="../login/cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
        </div>
    </nav>
    <div class="container">
<br/>
        <div class="row">