<div class="container">
    <center id="admin-modificar-banner">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($admin_proceso_modificar); ?>">

            <h4 style="text-align:left;">Autor:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['autor'] ?>" type="text" REQUIRED name="autor" maxlength="50" required>    
            <br><br>

            <h4 style="text-align:left;">Categoria:</h4> 
            <select id="ctg" REQUIRED name="categoria" >
                <option value="" selected="selected">- Selecciona -</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Aprender de licores">Aprender de licores</option>
                <option value="Cocteles">Cocteles</option>
                <option value="Maridajes">Maridajes</option>
                <option value="Momentos para compartir">Momentos para compartir</option>
                <option value="Expertos dicen">Expertos dicen</option>
            </select>
            <br><br>

            <h4 style="text-align:left;">Titulo:</h4> 
            <input style="color:black; background-color:#ffffff;" value="<?php echo $row['titulo'] ?>" type="text" name="titulo" maxlength="150" required>   
            <br><br>

            <h3>Imagen de presentación actual</h3>
            <img style="height: 12em;margin: auto;" class="img-responsive img-thumbnail" src="data:image/jpg;base64,<?php echo base64_encode($row['img_presentacion']);?>">
            <br><br>
            <input type="file" REQUIRED name="img_presentacion">
            <br><br>

            <h4 style="text-align:left;">Presentacion:</h4> 
            <textarea id="textarea_admin" name="presentacion" maxlength="250" required></textarea>
            <br><br>

            <h4 style="text-align:left;">Texto 1:</h4> 
            <textarea id="textarea_admin" name="texto1" maxlength="167000000" required></textarea>
            <br><br>

            <h3>Imagen 1 actual</h3>
            <img style="height: 12em;margin: auto;" class="img-responsive img-thumbnail" src="data:image/jpg;base64,<?php echo base64_encode($row['img1']);?>">
            <br><br>
            <input type="file" REQUIRED name="img1">
            <br><br>

            <h4 style="text-align:left;">Texto 2 (opcional):</h4> 
            <textarea id="textarea_admin" name="texto2" maxlength="167000000"></textarea>
            <br><br>

            <h4 style="text-align:left;">Imagen 2 (opcional):</h4> 
            <input type="file" name="img2">
            <br><br>
            <center>
                <input type="submit" name="Subir">
            </center>
        </form>
        <br>
    </center>
</div>