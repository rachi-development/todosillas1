<?php
$host="127.0.0.1:3306";
$bd="todosillas";
$usuario="debianDB";
$contrasenia="debianDB";


// Creamos la conexión y capturamos errores si lo hubieran

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia );
    



} catch ( Exception $ex) {
    echo $ex->getMessage();
}

?>