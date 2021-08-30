<br>
<section id="publicaciones">
  <?php  
  $filtro_categoria = false;  
  // SI LE DIERON A BUSCAR CON TEXTO ESCRITO
  if (isset($_POST['ok']) and !empty($buscar)) {
    $buscador = '%'.$buscar.'%';
    $buscar_en = "titulo LIKE '$buscador' 
    OR categoria LIKE '$buscador' 
    OR presentacion LIKE '$buscador' 
    OR autor LIKE '$buscador'
    ORDER BY fecha DESC";

    $query = "SELECT * FROM `tabla_blog` WHERE ".$buscar_en;

  } else if (!empty($_REQUEST['categoria'])) {

    $categoria = $_REQUEST['categoria'];
    $buscador = '%'.$categoria.'%';
    $query = "SELECT * FROM `tabla_blog` WHERE categoria LIKE '$buscador' ORDER BY fecha DESC";
    $filtro_categoria = true;

  } else {
    $query = "SELECT * FROM tabla_blog";
  }          
  
  $resultado = $conexion->query($query);
  
  // COMPROBACION DE BUSQUEDA
  $hay_resultado = false;

  while($row = $resultado->fetch_assoc()){
    $hay_resultado = true;
  ?>
  <article class="post">
    <a href="<?php echo POST."?id=".$row['id'] ?>" class="enlace-post">
      <h2 class="titulo-post"><?php echo $row['titulo'];?></h2>
    </a>
    <div class="row">
      <div class="col-md-5">
        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img_presentacion']); ?>" 
        class="img-post">
        <br>
        <p>
          <strong>Por: </strong>
          <span class="datos-publicaciones"><?php echo $row['autor']; ?></span>
        </p>
        <p>
          <strong>Categoria: </strong>
          <span class="datos-publicaciones"><?php echo $row['categoria']; ?></span>
        </p>
        <p>
          <strong>Fecha: </strong>
          <span class="datos-publicaciones">
            <?php 
            $fecha = explode(" ", $row['fecha']);
            $fecha = array_filter($fecha);
            $fecha = array_slice($fecha, 0);
            echo $fecha[0]; 
            ?>          
          </span>
        </p> 

      </div>
      <div class="col-md-7">
        <p class="parrafo-post">
          <?php echo $row['presentacion']; ?>
        </p> 
        <br>
        <a href="<?php echo POST."?id=".$row['id'] ?>" class="leer-mas">Leer mas...</a>       
      </div>
    </div>  
    <br>    
  </article>
  <?php      
  }
  if (!$hay_resultado and !$filtro_categoria) {
  ?>
  <article class="post">
    <h2 class="titulo-post">No hay artículos que coincidan con tu búsqueda.</h2>
    <br>
    <ul>
      <li><b>Revisá la ortografía</b> de la palabra.</li>
      <li>Utilizá <b>palabras más genéricas</b> o menos palabras.</li>
    </ul>
    <br>
    <center>
      <a type="button" id="volver-a-blog" class="btn btn-default" href="<?php echo BLOG; ?>">
        Volver
      </a>
    </center>    
  </article>
  <?php
  } else if ((!$hay_resultado and $filtro_categoria)) {
  ?>
  <article class="post">
    <h2 class="titulo-post">
      Actualmente no hay artículos en la siguiente categoría:
      <b><?php echo $_REQUEST['categoria']; ?></b>.
    </h2>
    <br>
    <center>
      <a type="button" id="volver-a-blog" class="btn btn-default" href="<?php echo BLOG; ?>">
        Volver
      </a>
    </center>    
  </article>
  <?php
  } 
  ?> 
</section>



   