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

$titulo = "Administrador - Modificar";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$id = $_REQUEST['id'];
$tabla = $_REQUEST['tabla'];

$query = "SELECT * FROM ".$tabla." WHERE id = '$id'";;
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();

$admin_proceso_modificar = ADMIN_PROCESO_MODIFICAR."?id=".$row['id']."&tabla=".$tabla;

switch ($tabla) {

    case TABLA_BANNER:
        include "plantillas/admin-modificar-banner.inc.php";
        break;  

    case TABLA_PRODUCTOS:
        include "plantillas/admin-modificar-productos.inc.php";
        break;

    case TABLA_BLOG:
        include "plantillas/admin-modificar-blog.inc.php";
        break;          
}

include_once "plantillas/documento-cierre-bis.inc.php";
?>