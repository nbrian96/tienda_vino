<?php
// Validador de Usuario
include_once "mostrar_errores.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == NULL || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$tabla = $_REQUEST['tabla'];

switch ($tabla) {

	case TABLA_BANNER:
		include "plantillas/admin-guardar-banner.inc.php";
		break;	

	case TABLA_PRODUCTOS:
		include "plantillas/admin-guardar-productos.inc.php";
		break;

	case TABLA_BLOG:
		include "plantillas/admin-guardar-blog.inc.php";
		break;			
}
