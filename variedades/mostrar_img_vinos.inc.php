<div class="container-fluid" style="background-image: url('img/fondo-producto.jpg');">
  <br><br>
  <div class="row" >
<?php                
      $query = "SELECT * FROM tabla_vino_".$tipo_vino;
      $resultado = $conexion->query($query);
      $img_actual = 0;
      while($row = $resultado->fetch_assoc()){
          $img_actual++;
          if (($img_actual-1)%4 == 0) {
?>
  </div>
  <div class="row">
<?php
          }
?>
    <div class="col-md-3 col-sm-3 col-xs-6 col_mostrar_img_horizontal" style="padding-bottom: 3em;">
        <div id="contenedor-vino">
            <img id="variedad-img" class="img-responsive" class="hover-shadow cursor" 
            src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"
            onclick="openModal();currentSlide(<?php echo $img_actual; ?>)">
            <br>
            <h3 style="color:black; text-align: center;"><b><?php echo $row['nombre']; ?></b></h3>
            <br>
            <?php include "variedades/text_descripcion.inc.php"; ?>
            <br>
            <p id="precio_variedad">
              <b><?php echo "$ ".$row['precio']; ?></b>
            </p>
        </div>
    </div>
<?php
      }
?> 
  </div>
  <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
          <?php                
          $query = "SELECT * FROM tabla_vino_".$tipo_vino;
          $resultado = $conexion->query($query);
          $img_actual = 0;
          while($row = $resultado->fetch_assoc()){
          ?>                
              <div class="mySlides" id="mySlides_variedad">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
              </div>
          <?php
          }
          ?>     
      </div>
  </div>    
</div>
