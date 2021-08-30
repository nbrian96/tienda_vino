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

$titulo = "Administrador General";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");
?>

<div class="container"  style="text-align:center; background-image:url('img/fondo-admin.jpg');">
    <h2><b>Seleccione la tabla que desea administrar</b></h2>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Banner</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_BANNER; ?>" >
                    Subir Nueva Imagen
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_BANNER; ?>">
                    Ver tabla
                </a>
            </div>            
        </div>  
        <div class="col-md-4">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Productos</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_PRODUCTOS; ?>" >
                    Subir Nuevo Producto
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_PRODUCTOS; ?>">
                    Ver tabla
                </a>
            </div>            
        </div>     
        <div class="col-md-4">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Blog</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_BLOG; ?>" >
                    Subir Nuevo Post
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_BLOG; ?>">
                    Ver tabla
                </a>
            </div>            
        </div>           
    </div>
    <br><br>
</div>

<?php
include_once "plantillas/documento-cierre-bis.inc.php"
?>