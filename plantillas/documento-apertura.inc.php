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
        
        <link rel="icon" type="image/png" href="">

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">   
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">     
    </head>
    <body>