<?php
// Validador de Usuario
include_once "mostrar_errores.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$tabla = $_REQUEST['tabla'];
$id = $_REQUEST['id'];

$query = "DELETE FROM ".$tabla." WHERE id='$id' ";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_MOSTRAR . "?tabla=" . $tabla);
} else {
	include_once("plantillas/documento-apertura.inc.php");
	include_once("plantillas/admin-navegador.inc.php");
	echo '<br>';
	echo '<h3 style="text-align: center">ERROR: No se eliminó</h3>';
	include_once "plantillas/documento-cierre.inc.php";
}
