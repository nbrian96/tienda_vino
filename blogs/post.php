<?php
include_once "mostrar_errores.inc.php";

$id = $_REQUEST['id'];
$query = "SELECT * FROM tabla_blog WHERE id = '$id'";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();

$titulo = $row['titulo'];

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<div id="fondo-post">
<section id="principal">
    <section id="publicaciones">
        <article class="post">
            <h2 class="titulo-post"><?php echo $row['titulo']; ?></h2>
            <p>
              <strong>Por: </strong><span class="datos-publicaciones"><?php echo $row['autor']; ?></span>
            </p>
            <p>  
              <strong>Fecha: </strong><span class="datos-publicaciones">
                <?php 
                $fecha = explode(" ", $row['fecha']);
                $fecha = array_filter($fecha);
                $fecha = array_slice($fecha, 0);
                echo $fecha[0]; 
                ?>          
              </span>
            </p>
            <img id="img_post" src="data:image/jpg;base64,<?php echo base64_encode($row['img1']);?>">
            <br>
            <div class="parrafo-post">
              <?php echo $row['texto1']; ?>
            </div>

            <?php 
            if ($row['img2']) {
            ?> 
            <img id="img_post" src="data:image/jpg;base64,<?php echo base64_encode($row['img2']);?>">
            <?php
            }
            ?>

            <?php 
            if ($row['texto2']) {
            ?> 
            <div class="parrafo-post">
              <?php echo $row['texto2']; ?>
            </div>
            <?php
            }
            ?>
          </article>
    </section>
    <?php
    include_once "blogs/panel-derecho-blog.inc.php";
    ?>
</section>    
</div>


<!-- Redes Sociales -->
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
<!-- Fin Redes Sociales -->

<!-- Botón Menú -->
<?php
include_once "plantillas/menu-blog.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "plantillas/documento-cierre.inc.php";
?>