<?php
//$conexion = new mysqli("localhost", "host", "Fedefon2020@", "vino");    // DOMINIO
$conexion = new mysqli("localhost", "root", "", "vino");    // LOCALHOST

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>