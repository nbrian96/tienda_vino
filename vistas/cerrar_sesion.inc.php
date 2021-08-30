<?php
include_once "mostrar_errores.inc.php";

session_start();

error_reporting(0); //descomentar cuando se termine el proyectos
$varsesion = $_SESSION['usuario'];


if ($varsesion == null || $varsesion = '') {
	echo "Usted no tiene autorización";
	die();
}

session_destroy();
header("Location:".LOGIN_ADMIN);
?>