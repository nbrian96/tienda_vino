<div class="container">
    <center id="admin-modificar-banner">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($admin_proceso_modificar); ?>">

            <h3>Imagen actual</h3>
            <img style="height: 12em;margin: auto;" class="img-responsive img-thumbnail" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
            <br><br>

            <h4 style="text-align:left;">Nombre:</h4> 
            <input style="background-color: white;" maxlength="50" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="nombre"
            value="<?php echo $row['nombre']; ?>">  

            <input type="file" REQUIRED name="imagen"> 
            <br><br>

            <input type="submit" name="Subir">
        </form>
        <br>
    </center>
</div>