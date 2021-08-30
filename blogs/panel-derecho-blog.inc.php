<section id="sidebar" class="hide-mobile panel-derecho-blog">

  <!-- BUSQUEDA -->
  <section id="buscar" class="buscar-ordenador">
    <h2 class="encabezado-sidebar">
      <i style="font-size:0.8em;" class="fa fa-search" aria-hidden="true"></i> Buscar
    </h2>
    <form action="<?php echo BLOG;?>" method="POST">
      <center>
        <?php
        if (isset($_POST['ok'])) {
        ?>
        <input type="text" name="buscar" placeholder="Buscar" value="<?php echo $buscar; ?>">
        <?php
        } else{
        ?>
        <input type="text" name="buscar" placeholder="Buscar">
        <?php
        }
        ?>        
        <br><br>
        <button class="boton" name="ok">Buscar</button>          
      </center>

    </form>
  </section>
  <!-- BUSQUEDA -->
  <br>
  <!-- FILTRO POR CATEGORIA -->
  <section id="categorias">
    <h2 class="encabezado-sidebar">Categorias</h2>
    <a href="<?php echo BLOG; ?>?categoria=Accesorios" class="enlace-sidebar">
      Accesorios
    </a>
    <a href="<?php echo BLOG; ?>?categoria=Aprender de licores" class="enlace-sidebar">
      Aprender de licores
    </a>
    <a href="<?php echo BLOG; ?>?categoria=Cocteles" class="enlace-sidebar">
      Cocteles
    </a>
    <a href="<?php echo BLOG; ?>?categoria=Maridajes" class="enlace-sidebar">
      Maridajes
    </a>
    <a href="<?php echo BLOG; ?>?categoria=Momentos para compartir" class="enlace-sidebar">
      Momentos para compartir 
    </a>
    <a href="<?php echo BLOG; ?>?categoria=Expertos dicen" class="enlace-sidebar">
      Expertos dicen 
    </a>
  </section>
  <!-- FILTRO POR CATEGORIA -->
  <br>
  <!-- ULTIMOS ARTICULOS -->
  <section id="ultimos-post">
    <h2 class="encabezado-sidebar">Últimos Artículos</h2>
    <?php
    $cont_publicaciones = 0;
    $query = "SELECT * FROM tabla_blog ORDER BY fecha DESC";
    $resultado = $conexion->query($query);
    while($cont_publicaciones != 4 and $row = $resultado->fetch_assoc()){
    ?>
    <a href="<?php echo POST."?id=".$row['id'] ?>" class="enlace-sidebar">
      <h2><?php echo $row['titulo']; ?></h2>
      <p><?php echo $row['presentacion']; ?></p>
    </a>
    <?php
      $cont_publicaciones++;
    }
    ?>
  </section>
  <!-- ULTIMOS ARTICULOS -->
</section>

<section id="sidebar" class="hide-mobile panel-derecho-blog ultimos-articulos-movil">
  <!-- ULTIMOS ARTICULOS -->
  <section id="ultimos-post">
    <h2 class="encabezado-sidebar">Últimos Artículos</h2>
    <?php
    $cont_publicaciones = 0;
    $query = "SELECT * FROM tabla_blog ORDER BY fecha DESC";
    $resultado = $conexion->query($query);
    while($cont_publicaciones != 4 and $row = $resultado->fetch_assoc()){
    ?>
    <a href="<?php echo POST."?id=".$row['id'] ?>" class="enlace-sidebar">
      <h2><?php echo $row['titulo']; ?></h2>
      <p><?php echo $row['presentacion']; ?></p>
    </a>
    <?php
      $cont_publicaciones++;
    }
    ?>
  </section>
  <!-- ULTIMOS ARTICULOS -->
</section>
