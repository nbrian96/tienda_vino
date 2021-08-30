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

$titulo = "Administrador - Subir";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$tabla = $_REQUEST['tabla'];
?>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-7">		
			<div style="background-color:#7f7f7f; padding:1em;">
				<?php
				switch ($tabla) {

					case TABLA_BANNER:
						include "plantillas/admin-subir-banner.inc.php";
						break;	

					case TABLA_PRODUCTOS:
						include "plantillas/admin-subir-productos.inc.php";
						break;

					case TABLA_BLOG:
						include "plantillas/admin-subir-blog.inc.php";
						break;			
				}
				?>
			</div>
		</div>
 
		<div class="col-md-5 text-center">
			<h3>Visualizar Tabla</h3>
			<br>
			<a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".$tabla; ?>">Tabla</a>
		</div>
	</div>
</div>
<br>

<?php
include_once "plantillas/documento-cierre-bis.inc.php";
?>