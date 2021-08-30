<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">
	<center style="color: black;">
		
		<h4 style="text-align:left;">Nombre:</h4> 
		<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="nombre" maxlength="50" required autofocus>	
		<br><br>

		<input type="file" REQUIRED name="imagen">
		<br><br>
		
		<input type="submit" name="Subir">
	</center>
</form>	