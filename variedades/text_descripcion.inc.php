
<?php
    $texto_actual = $img_actual;
	$longitud_maxima = 100;
	$texto = $row['descripcion'];

    $resultado_texto = '';

    if (strlen($texto) >= $longitud_maxima) {

        $resultado_texto = substr($texto, 0, $longitud_maxima);

        $resultado_texto .= '...';

    } else {
        $resultado_texto = $texto;
    }
?>

<p class="text_descripcion text_incompleto"><?php echo $resultado_texto; ?></p>
<p class="text_descripcion text_completo"><?php echo $texto; ?></p>

<center>
    <button type="button" class="btn btn-primary LeerMas" onclick="openLeerMas(<?php echo $texto_actual; ?>);">
        Leer más
    </button>
    <button type="button" class="btn btn-primary LeerMenos" onclick="closeLeerMas(<?php echo $texto_actual; ?>);">
        Leer menos
    </button>
</center>

