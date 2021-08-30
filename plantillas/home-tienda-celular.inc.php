
<?php
if (empty($categoria) && empty($cepa) && empty($pais)) {
    if (empty($precio)) {
        $query = "SELECT * FROM tabla_productos ORDER BY prioridad ASC";
    } elseif ($precio == "Mayor Precio") {
        $query = "SELECT * FROM tabla_productos ORDER BY precio DESC";
    } else {
        $query = "SELECT * FROM tabla_productos ORDER BY precio ASC";
    }    
} 
else {
    $buscar_en = "";
    if (empty($categoria)) {
        if (empty($cepa)) {
            $buscar_en = $buscar_en."pais LIKE '%$pais%'";
        } else {
            $buscar_en = $buscar_en."cepa LIKE '%$cepa%'";
            if (!empty($pais)) {
                $buscar_en = $buscar_en." AND pais LIKE '%$pais%'";
            }
        }
        
    } else {
        $buscar_en = $buscar_en."categoria LIKE '%$categoria%'";
        if (!empty($cepa)) {
            $buscar_en = $buscar_en." AND cepa LIKE '%$cepa%'";
        }
        if (!empty($pais)) {
            $buscar_en = $buscar_en." AND pais LIKE '%$pais%'";
        }
    }

    if (empty($precio)) {
        $query = "SELECT * FROM tabla_productos WHERE ".$buscar_en." ORDER BY prioridad ASC";
    } elseif ($precio == "Mayor precio") {
        $query = "SELECT * FROM tabla_productos WHERE ".$buscar_en." ORDER BY precio DESC";
    } else {
        $query = "SELECT * FROM tabla_productos WHERE ".$buscar_en." ORDER BY precio ASC";
    }
}
 
$resultado = $conexion->query($query);

$hayProductos = false;
$elementos = 0;

echo '<div class="row paginacion_productos-celular">';

while($row = $resultado->fetch_assoc()){
    $hayProductos = true;
    
    if ($elementos < 2) {
        $elementos++;
?>
        <div class="col-md-6">
            <h3><?php echo $row['nombre']; ?></h3>
            <br>
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" class="img-responsive">   
            <br> 
            <h4>$ <?php echo $row['precio']; ?></h4>
        </div>
<?php
    }
    if ($elementos == 2) {
        $elementos = 0;
        echo "</div>";
        echo '<div class="row paginacion_productos-celular">';
    }
}

echo "</div>";
?>
