<div class="col-md-3">
	<center id="col-img-banner">
		<p style="text-align: center;"><b><?php echo $row['nombre']; ?></b></p>
	
		<img class="img-responsive img-thumbnail img-admin-produc"
		src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">	
		<br><br>

		<p>
			<?php echo $row['descripcion']; ?>
		</p>
		<br>

		<p style="text-align: left;">
			Prioridad al mostrar: <?php echo $row['prioridad']; ?>
		</p>
		<br>

		<p style="text-align: left;">
			Categoria: <?php echo $row['categoria']; ?>
		</p>
		<br>

		<p style="text-align: left;">
			Pais: <?php echo $row['pais']; ?>
		</p>
		<br>

		<p style="text-align: left;">
			Cepa: <?php echo $row['cepa']; ?>
		</p>
		<br>

		<p style="text-align: left;">
			$ <?php echo $row['precio']; ?>
		</p>
		<br>

		<a style="padding:1em;" href="<?php echo ADMIN_MODIFICAR."?id=".$row['id']."&tabla=".TABLA_PRODUCTOS; ?>">
			<i class="fa fa-refresh" aria-hidden="true"></i> Modificar
		</a>
		<br><br>

		<a style="padding:1em;" href="<?php echo ADMIN_ELIMINAR."?id=".$row['id']."&tabla=".TABLA_PRODUCTOS; ?>">
			<i class="fa fa-times" aria-hidden="true"></i> Eliminar
		</a>						
	</center>			
</div>
