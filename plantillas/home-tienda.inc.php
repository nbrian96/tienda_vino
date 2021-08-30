<?php
if (empty($categoria) && empty($cepa) && empty($pais)) {
    if (empty($precio)) {
        $query = "SELECT * FROM tabla_productos ORDER BY prioridad ASC";
    } elseif ($precio == "Mayor Precio") {
        $query = "SELECT * FROM tabla_productos ORDER BY CAST(precio AS int) DESC";
    } else {
        $query = "SELECT * FROM tabla_productos ORDER BY CAST(precio AS int) ASC";
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
        $query = "SELECT * FROM tabla_productos WHERE ".$buscar_en." ORDER BY CAST(precio AS int) DESC";
    } else {
        $query = "SELECT * FROM tabla_productos WHERE ".$buscar_en." ORDER BY CAST(precio AS int) ASC";
    }
    
}
$resultado = $conexion->query($query);

$hayProductos = false;
$elementos = 0;

echo '<div class="row paginacion_productos">';

while($row = $resultado->fetch_assoc()){
    $hayProductos = true;
    
    if ($elementos < 5) {
        $elementos++;
?>
        <div class="col-md-2 col-sm-2">
            <br>
            <h3 id="nombreProductos"><?php echo $row['nombre']; ?></h3> 
            <br>
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" class="img-responsive">                      
            <br>
            <h4>$ <?php echo $row['precio']; ?></h4> 
            <br>            
        </div>
<?php
    }
    if ($elementos == 5) {
        $elementos = 0;
        echo "</div>";
        echo '<div class="row paginacion_productos">';
    }
} 

echo "</div>";
?>