<?php
//Establece la conexión con la base de datos
$host = "localhost";
$bd = "sitio";
$usuario = ""; //Indicar nombre de la base de datos
$contrasenia = ""; //Indicar contrasenia de la base de datos

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);
    if ($conexion) {
        //echo "Conectado... a sistema ";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
