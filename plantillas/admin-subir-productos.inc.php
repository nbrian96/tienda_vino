<form style="color: black;" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">
	
	<h4 style="text-align:left;">Nombre:</h4> 
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 100 caracteres..." type="text" name="nombre" maxlength="100" required autofocus>	
	<br><br>

	<h4 style="text-align:left;">Imagen:</h4> 
	<input type="file" REQUIRED name="imagen">
	<br><br>

	<h4 style="text-align:left;">Descripción:</h4> 
	<textarea id="textarea_admin" placeholder="Máximo 255 caracteres..." maxlength="255" name="descripcion" required></textarea>
    <br><br>

    <h4 style="text-align:left;">Prioridad: </h4> 
    <input type="number" min="1" max="20000" REQUIRED name="prioridad" required>
	<br><br>

	<h4 style="text-align:left;">Categoria:</h4> 
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" name="categoria" maxlength="50" required>	
	<br><br>

	<h4 style="text-align:left;">País:</h4> 
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" name="pais" maxlength="50" required>	
	<br><br>

	<h4 style="text-align:left;">Cepa:</h4> 
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" name="cepa" maxlength="50" required>	
	<br><br>

	<h4 style="text-align:left;">Precio:</h4> 
	<input style="color:black; background-color:#ffffff;" required type="text" name="precio" maxlength="50">	
	<br><br>

	<center>
		<input type="submit" name="Subir">
	</center>
</form>	