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

switch ($tabla) {

    case TABLA_BANNER:
		$nombre = $_POST['nombre'];
		$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

		$query = "UPDATE ".$tabla." SET `nombre` = '$nombre', `imagen` = '$imagen' WHERE id='$id'";

        break;   

    case TABLA_PRODUCTOS:
		$nombre = $_POST['nombre'];
		$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		$precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $pais = $_POST['pais'];
        $cepa = $_POST['cepa'];
        $prioridad = $_POST['prioridad'];

		$query = "UPDATE ".$tabla." SET `nombre` = '$nombre', `imagen` = '$imagen', `precio` = '$precio', `descripcion` = '$descripcion', `categoria` = '$categoria', `pais` = '$pais', `cepa` = '$cepa', `prioridad` = '$prioridad' WHERE id='$id'";

        break;

    case TABLA_BLOG:
    	$autor = $_POST['autor'];
		$categoria = $_POST['categoria'];
		$titulo = $_POST['titulo'];
		$img_presentacion = addslashes(file_get_contents($_FILES['img_presentacion']['tmp_name']));
		$presentacion = $_POST['presentacion'];
		$texto1 = $_POST['texto1'];
		$img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
		$texto2 = NULL;
		$img2 = NULL;

		if ($_POST['texto2']) {
			$texto2 = $_POST['texto2'];
		}
		if ($_FILES['img2']['tmp_name']) {
			$img2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
		}

		$query = "UPDATE ".$tabla." SET `fecha` = NOW(), `autor` = '$autor', `categoria` = '$categoria', `titulo` = '$titulo', `img_presentacion` = '$img_presentacion', `presentacion` = '$presentacion', `texto1` = '$texto1', `img1` = '$img1', `texto2` = '$texto2', `img2` = '$img2' WHERE id='$id'";

        break;          
}

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:". ADMIN_MOSTRAR . "?tabla=" . $tabla);
} else {
	include_once("plantillas/documento-apertura.inc.php");
	include_once("plantillas/admin-navegador.inc.php");
	echo '<br>';
	echo '<h3 style="text-align: center">ERROR: No se modifico</h3>';
	print_r($conexion->error);
	include_once "plantillas/documento-cierre-bis.inc.php";
}