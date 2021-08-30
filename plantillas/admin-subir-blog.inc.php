<form style="color: black;" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">

	<h4 style="text-align:left;">Autor:</h4> 
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="autor" maxlength="50" required autofocus>	
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
	<input style="color:black; background-color:#ffffff;" placeholder="Máximo 150 caracteres..." type="text" REQUIRED name="titulo" maxlength="150" required>	
	<br><br>

	<h4 style="text-align:left;">Imagen de presentacion:</h4> 
	<input type="file" REQUIRED name="img_presentacion">
	<br><br>

	<h4 style="text-align:left;">Presentacion:</h4> 
	<textarea id="textarea_admin" placeholder="Máximo 250 caracteres..." name="presentacion" maxlength="250" required></textarea>
	<br><br>

	<h4 style="text-align:left;">Texto 1:</h4> 
	<textarea id="textarea_admin" name="texto1" maxlength="167000000" required></textarea>
	<br><br>

	<h4 style="text-align:left;">Imagen 1:</h4> 
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