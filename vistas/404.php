<?php
$titulo = "Error 404";
?>

<!DOCTYPE html>
<html lang="es">
    <head>        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        
        <meta name="description" content="">
        <meta name="keywords" content="">

        <?php  
            if (!isset($titulo) || empty($titulo)){
                $titulo = 'Vinos';
            }
            echo "<title>$titulo</title>";
        ?> 
        
        <link rel="icon" type="image/png" href="<?php echo RUTA_IMG; ?>robot.jpg">

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">        
    </head>
    <body style="background-image: url('<?php echo RUTA_IMG; ?>fondo1.jpg');">
    	<br>
		<div class="container">
			<div class="jumbotron" style="background-color: white;">
				<div class="row">
					<div class="col-md-8">
						<h1>Error 404</h1>
						<br><br>
						<p>La URL solicitada no se encontró en este servidor.</p>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo RUTA_IMG; ?>robot.jpg"> 
					</div>
				</div>
				<br><br>
				<center>
					<a href="<?php echo SERVIDOR; ?>" type="button" class="btn btn-primary">Volver a inicio</a>
				</center>
				
			</div>
		</div>

        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>