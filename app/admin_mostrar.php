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

$titulo = "Administrador - Mostrar";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$tabla = $_REQUEST['tabla'];
?>
<br>
<div class="container">
	<h2>
		<a href="<?php echo ADMIN_SUBIR."?tabla=".$tabla; ?>">
			<i class="fa fa-plus" aria-hidden="true"></i> Agregar nuevo
		</a>
	</h2>

	<br><br>

	<div class="row" style="text-align: left;">
		<?php 
		$contador_col = 0;
		if ($tabla == TABLA_PRODUCTOS) {
			$query = "SELECT * FROM ".$tabla." ORDER BY prioridad ASC";
		} else {
			$query = "SELECT * FROM ".$tabla." ORDER BY id DESC";
		}
		$resultado = $conexion->query($query);
		while ($row = $resultado->fetch_assoc()) {
			$contador_col++;

			switch ($tabla) {

				case TABLA_BANNER:
					include "plantillas/admin-mostrar-banner.inc.php";
					break;	

				case TABLA_PRODUCTOS:
					include "plantillas/admin-mostrar-productos.inc.php";
					break;

				case TABLA_BLOG:
					include "plantillas/admin-mostrar-blog.inc.php";
					break;			
			}

			if ($contador_col == 2 && $tabla !== TABLA_PRODUCTOS) {
				$contador_col = 0;
			?>
			</div>
			<div class="row" style="text-align: left;">
			<?php
			}

			if ($contador_col == 4 && $tabla == TABLA_PRODUCTOS) {
				$contador_col = 0;
			?>
			</div>
			<div class="row">
			<?php
			}
		}
		?>
	</div>
</div>
<?php
include_once "plantillas/documento-cierre-bis.inc.php";
?>		