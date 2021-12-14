<?php
$host="localhost";
$bd="todosillas";
$usuario="root";
$contrasenia="";


// Creamos la conexión y capturamos errores si lo hubieran

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia );
    



} catch ( Exception $ex) {
    echo $ex->getMessage();
}

?>