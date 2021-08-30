<?php
$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$pais = $_POST['pais'];
$cepa = $_POST['cepa'];
$prioridad = $_POST['prioridad'];

$valores_form = " (`nombre`, `imagen`, `precio`, `descripcion`, `categoria`, `pais`, `cepa`, `prioridad`) ";

$valores_db = "('$nombre', '$imagen', '$precio', '$descripcion', '$categoria', '$pais', '$cepa', '$prioridad')";

$query = "INSERT INTO ".$tabla.$valores_form."VALUES".$valores_db;

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_MOSTRAR . "?tabla=" . $tabla);
} 

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

echo '<br>';
echo '<h3 style="text-align: center">ERROR: No se subio</h3>';
print_r($conexion->error);
if (round(intval($_FILES["imagen"]["size"])/1048576, 2) > 2){
	echo '<ul>';
	echo('<li>El archivo <b>Imagen</b> no puede superar los 2 MB.</li>');
	echo '</ul>';
} 

include_once "plantillas/documento-cierre-bis.inc.php";
die();
