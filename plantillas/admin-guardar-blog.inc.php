<?php
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

$valores_form = " (fecha,autor,categoria,titulo,img_presentacion,presentacion,texto1,img1,texto2,img2) ";

$valores_db = "(NOW(),'$autor','$categoria','$titulo','$img_presentacion','$presentacion','$texto1','$img1','$texto2','$img2')";

$query = "INSERT INTO ".$tabla.$valores_form."VALUES".$valores_db;

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_MOSTRAR . "?tabla=" . $tabla);
} 

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

echo '<br>';
echo '<h3 style="text-align: center">ERROR: No se subio</h3>';

if ($_FILES['img2']['tmp_name'] && round(intval($_FILES["img2"]["size"])/1048576, 2) > 2) {
	echo '<ul>';
	echo('<li>El archivo <b>Imagen 2</b> no puede superar los 2 MB.</li>');
	echo '</ul>';
} 
if (round(intval($_FILES["img_presentacion"]["size"])/1048576, 2) > 2) {
	echo '<ul>';
	echo('<li>El archivo <b>Imagen de presentación</b> no puede superar los 2 MB.</li>');
	echo '</ul>';
} 

if (round(intval($_FILES["img1"]["size"])/1048576, 2) > 2){
	echo '<ul>';
	echo('<li>El archivo <b>Imagen 1</b> no puede superar los 2 MB.</li>');
	echo '</ul>';
} 

include_once "plantillas/documento-cierre-bis.inc.php";
die();
