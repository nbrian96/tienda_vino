<!-- BUSQUEDA -->
<section id="buscar" class="buscar-movil">
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