<div class="col-md-6">
	<center id="col-img-banner">
		<p style="text-align: center;"><b><?php echo $row['nombre']; ?></b></p>
	
		<img id="img-banner" class="img-responsive img-thumbnail"
		src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">	
		<br><br>

		<a style="padding:1em;" href="<?php echo ADMIN_MODIFICAR."?id=".$row['id']."&tabla=".TABLA_BANNER; ?>">
			<i class="fa fa-refresh" aria-hidden="true"></i> Modificar
		</a>
		<br><br>

		<a style="padding:1em;" href="<?php echo ADMIN_ELIMINAR."?id=".$row['id']."&tabla=".TABLA_BANNER; ?>">
			<i class="fa fa-times" aria-hidden="true"></i> Eliminar
		</a>						
	</center>			
</div>
