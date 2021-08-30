<div class="container">
    <center id="admin-modificar-banner">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($admin_proceso_modificar); ?>">
            
            <h4 style="text-align:left;">Nombre:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['nombre']; ?>" type="text" name="nombre" maxlength="100" required>  
            <br><br>

            <h3>Imagen actual</h3>
            <img style="height: 12em;margin: auto;" class="img-responsive img-thumbnail" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
            <br><br>
            <input type="file" REQUIRED name="imagen">
            <br><br>

            <h4 style="text-align:left;">Descripción:</h4> 
            <textarea id="textarea_admin" placeholder="Máximo 255 caracteres..." maxlength="255" name="descripcion" required></textarea>
            <br><br>

            <h4 style="text-align:left;">Prioridad: </h4> 
            <input type="number" min="1" max="20000" REQUIRED value="<?php echo $row['prioridad']; ?>" name="prioridad" required>
            <br><br>

            <h4 style="text-align:left;">Categoria:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['categoria']; ?>" type="text" name="categoria" maxlength="50" required>   
            <br><br>

            <h4 style="text-align:left;">País:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['pais']; ?>" type="text" name="pais" maxlength="50" required>    
            <br><br>

            <h4 style="text-align:left;">Cepa:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['cepa']; ?>" type="text" name="cepa" maxlength="50" required>    
            <br><br>

            <h4 style="text-align:left;">Precio:</h4> 
            <input style="color:black; background-color:#ffffff;" required type="text" name="precio" maxlength="50" value="<?php echo $row['precio']; ?>">    
            <br><br>

            <center>
                <input type="submit" name="Subir">
            </center>
        </form>
        <br>
    </center>
</div>