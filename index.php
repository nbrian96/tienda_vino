<?php
include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

//DOMINIO
//$componente_url = parse_url($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

//LOCALHOST
$componente_url = parse_url($_SERVER["REQUEST_URI"]);

$ruta = $componente_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

//if ($partes_ruta[0] == 'ideasdelvino.com') {  // Dominio 
if ($partes_ruta[0] == 'vinos') {   // LOCALHOST

	if (count($partes_ruta) == 1) {
		$ruta_elegida = "vistas/home.php";	

	} else if (count($partes_ruta) == 2) {		
		switch ($partes_ruta[1]) {
			// Login y Logout
			case 'login_admin':
				$ruta_elegida = "vistas/login_admin.php";
				break;
			case 'cerrar_sesion':
				$ruta_elegida = "vistas/cerrar_sesion.inc.php";
				break;

			// Variedades
			case 'variedad':
				$ruta_elegida = "variedades/variedad.php";
				break;

			// Formulario
			case 'formulario':
				$ruta_elegida = "vistas/formulario.php";
				break;	

			// Blogs
			case 'blog':
				$ruta_elegida = "blogs/blog.php";
				break;

			// Usuario de base datos	
			case 'un-buen-vino-al-alcance-de-un-click':
				$ruta_elegida = "app/admin.php";
				break;
		}

	} else if (count($partes_ruta) == 3 & $partes_ruta[1]==='un-buen-vino-al-alcance-de-un-click') {	
		switch ($partes_ruta[2]) {
			// Manejo de base de datos
			case 'admin_subir':
				$ruta_elegida = "app/admin_subir.php";
				break;

			case 'admin_eliminar':
				$ruta_elegida = "app/admin_eliminar.inc.php";
				break;

			case 'admin_guardar':
			$ruta_elegida = "app/admin_guardar.inc.php";
			break;

			case 'admin_modificar':
			$ruta_elegida = "app/admin_modificar.php";
			break;

			case 'admin_mostrar':
			$ruta_elegida = "app/admin_mostrar.php";
			break;

			case 'admin_proceso_modificar':
			$ruta_elegida = "app/admin_proceso_modificar.inc.php";
			break;
		}
	} else if(count($partes_ruta) == 3 & $partes_ruta[1]==='blog')
		switch ($partes_ruta[2]) {
			case 'post' :
			$ruta_elegida = "blogs/post.php";
			break;
		}
}

include_once $ruta_elegida;
?>

