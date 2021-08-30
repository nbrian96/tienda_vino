<?php
include_once "mostrar_errores.inc.php";

$titulo = "Vinos - Home";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-12 col-sm-12">
            <!-- Banner -->
            <div class="slideshow-container" id="banner">
                <?php                
                $query = "SELECT * FROM ".TABLA_BANNER;
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                    <div class="mySlides fade">
                      <!-- Extraer img de db -->
                      <img class="imagenes_banner" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
                    </div>
                <?php
                }
                ?>

                <i class="fa fa-angle-right fa-2x next" aria-hidden="true" onclick="plusSlides(1)"></i>
                <i class="fa fa-angle-left fa-2x prev" aria-hidden="true" onclick="plusSlides(-1)"></i>
            </div>
            <!-- Fin Banner -->
        </div>
    </div>
</div>


<!-- Nuestros Vinos -->
<div class="container-fluid" id="nuestros-vinos">

    <div class="row">
        <div class="col-md-4">
            <h2 id="titulo-nuestros-vinos">Tienda</h2>
            <img class="img-responsive" id="sep-nuestros-vinos" src="<?php echo RUTA_IMG ?>separador.jpg">
        </div>
    </div>

    <br>

</div>   

<!-- TIENDA PRODUCTO -->
<div class="container-fluid">
    <!-- FILTRO PRODUCTO -->
    <div class="container" style="margin-left: 1.5em">
        <?php
        include_once "plantillas/filtro_productos.inc.php";
        ?>    
    </div>
    <br>
    <!-- FIN FILTRO PRODUCTO -->

    <div class="slideshow-container show-mobileP" id="tiendaProducto">        
        <center>
        <?php
        include_once "plantillas/home-tienda-celular.inc.php";
        ?>  
        </center> 
        <?php
        if ($hayProductos) {
        ?>
            <i class="fa fa-angle-right fa-2x nextP" aria-hidden="true" onclick="plusProductoCelular(1)"></i>
            <i class="fa fa-angle-left fa-2x prevP" aria-hidden="true" onclick="plusProductoCelular(-1)"></i> 
        <?php
        } else {
            echo "<h3>No hay resultados.</h3>";
        }
        ?>      
    </div>  

    <div class="slideshow-container hide-mobileP" id="tiendaProducto">        
        <center>
            <div style="width:95%">
                <?php
                include_once "plantillas/home-tienda.inc.php";
                ?>          
            </div> 
        </center>
        <?php
        if ($hayProductos) {
        ?>
        <i class="fa fa-angle-right fa-2x nextP" aria-hidden="true" onclick="plusProducto(1)"></i>
        <i class="fa fa-angle-left fa-2x prevP" aria-hidden="true" onclick="plusProducto(-1)"></i>  
        <?php
        } else {
            echo "<h3>No hay resultados.</h3>";
        }
        ?>         
    </div>   

    <br><br>
    <center>
        <h3>¡¡¡ Pedí tus productos aquí !!!</h3>
        <a type="button" class="btn btn-default" id="btnFormProduc" href="<?php echo FORMULARIO ?>">
            Formulario de compra
        </a>
    </center>
</div>
<!-- FIN TIENDA PRODUCTO -->

<br><br>

<!-- Nosotros -->
<div style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.9)),url('img/fondo-nosotros.jpg');">
    <div id="nosotros" class="parallax">
        <div id="titulo-nosotros">
            <img class="img-responsive" src="<?php echo RUTA_IMG; ?>TextoNosotros.png">
        </div>
        
    </div>  
</div>
<!-- Fin Nosotros -->

<!-- BLOG -->
<div class="container-fluid" id="blog" style="background-color:#470f11; color:white;">
    <h2 style="padding-left: 0.6em;">Blog</h2>
    <p style="font-size:1.3em;padding-left:1.1em;padding-right:1.1em;">
        Vea nuestros últimos artículos relacionados al vino
    </p>
    <?php
    include_once "plantillas/home-blog.inc.php";
    ?>
</div>
<!-- FIN DE BLOG -->


<!-- Redes Sociales -->
<div id="pie-de-pagina">
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
</div>
<!-- Fin Redes Sociales -->


<!-- Botón Menú -->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Inicio</a>
        <a href="#nuestros-vinos"> Tienda  </a>
        <a href="#nosotros">Nosotros</a>
        <a href="#blog">Blog</a>
        <a href="#pie-de-pagina">Redes sociales</a>
    </div>
</div>
<div id="menu" >
    <span id="btn-menu" class="btnMenu" onclick="openNav()">&#9776; Menú</span>
</div> 
<!-- Fin Botón Menú -->

<?php 
include_once "plantillas/home-js.inc.php"; 
include_once "plantillas/documento-cierre.inc.php";
?>        
