<div class="container-fluid">        
    <div class="row paginacion_blog">
    <?php
    $paginacion = 1;
    $contador_col = 0;

    $query = "SELECT * FROM tabla_blog ORDER BY fecha DESC";
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
        if ($contador_col == 3) {
            $contador_col = 0;
            $paginacion++;
    ?>
    </div>
</div>
<div class="container-fluid">        
    <div class="row paginacion_blog">
    <?php
        }
        $contador_col++;
    ?>
        <div class="col-md-4" style="padding:0em;">
            <div class=" col_blog_recientes">
                <h2><?php echo $row['titulo']?></h2>
                <br>
                <center>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['img_presentacion']); ?>"
                     id="img_blog" class="img-responsive img-thumbnail img_blog_zoom">
                </center>
                
                <p style="padding-top: 1em;font-size:1.2em;"><?php echo $row['presentacion']; ?></p>
                <br>
                <center>
                    <a href="<?php echo POST."?id=".$row['id'] ?>" type="button" class="btn btn-default">
                        Ir al post
                    </a>
                </center>
            </div>
            <br>
        </div>
    <?php
        if ($paginacion == 3 and $contador_col == 3) {
            break;
        }
    }
    ?>
    </div>
</div>

<br><br>
<center>
    <ul class="pagination">
        <?php
        $i = 0;
        if ($paginacion > 3) { $paginacion = 3; }

        while ($paginacion != 0) {
            $paginacion--;
            $i++;

        ?>
        <li onclick="cambiarPagina(<?php echo $i ?>)">
            <a  class="paginacion_index" href="#blog" style="color:black;">
                <?php echo $i; ?>                    
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</center>

<center>
    <a type="button" class="btn btn-default" href="<?php echo BLOG ?>" >Ver todos los Blogs</a>
</center>
<br><br>     
