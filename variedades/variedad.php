<?php
include_once "mostrar_errores.inc.php";

$titulo = "Tienda";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<!-- FILTRO PRODUCTO -->
		    <div class="container">
		        <center>
		            <?php
		            include_once "plantillas/filtro_productos.inc.php";
		            ?>    
		        </center>
		    </div>
		</div>
		<div class="col-md-8">
			
		</div>
	</div>
</div>

<!-- Redes Sociales -->
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
<!-- Fin Redes Sociales -->

<!-- Botón Menú -->
<?php
include_once "plantillas/menu.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "variedades/js_variedades.inc.php";
include_once "plantillas/documento-cierre.inc.php";
?>