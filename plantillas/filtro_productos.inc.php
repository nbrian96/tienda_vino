<?php
$precio = "Más Relevante";
$categoria = "";
$cepa = "";
$pais = "";

if (isset($_REQUEST['precio']) && !empty($_REQUEST['precio'])) {
    $precio = $_REQUEST['precio'];
}

if (isset($_REQUEST['categoria']) && !empty($_REQUEST['categoria'])) {
    $categoria = $_REQUEST['categoria'];
}

if (isset($_REQUEST['cepa']) && !empty($_REQUEST['cepa'])) {
    $cepa = $_REQUEST['cepa'];
}

if (isset($_REQUEST['pais']) && !empty($_REQUEST['pais'])) {
    $pais = $_REQUEST['pais'];
}
?>

<form id="formFiltroProducto" action="<?php echo htmlspecialchars(SERVIDOR); ?>#tiendaProducto" method="get">
    <div class="row">
        <div class="col-md-2">
            <div id="filtro" >
                <h5 id="tit-filtro">Precio<?php echo ": ".$precio; ?></h5>
                <select id="ctg" name="precio">
                    <option value="" selected="selected">----------------------------------</option>
                    <option value="">Más Relevante</option>
                    <option value="Mayor Precio">Mayor Precio</option>
                    <option value="Menor Precio">Menor Precio</option>
                </select>
            </div>            
        </div>
        <div class="col-md-2">
            <div id="filtro" >
                <h5 id="tit-filtro">Tipo<?php echo ": ".$categoria; ?></h5>
                <select id="ctg" name="categoria">
                    <option value="" selected="selected">----------------------------------</option>
                    <option value="Tinto">Tinto</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Rosado">Rosado</option>
                    <option value="Espumoso">Espumoso</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div id="filtro" >
                <h5 id="tit-filtro">Cepa<?php echo ": ".$cepa; ?></h5>
                <select id="cep" name="cepa">
                    <option value="" selected="selected">----------------------------------</option>
                    <option value="Cabernet Sauvignon">Cabernet Sauvignon</option>
                    <option value="Malbec">Malbec</option>
                    <option value="Merlot">Merlot</option>
                    <option value="Syrah">Syrah</option>
                    <option value="Pinot Noir">Pinot Noir</option>
                    <option value="Sangiovese">Sangiovese</option>
                    <option value="Bonarda">Bonarda</option>
                    <option value="Tempranillo">Tempranillo</option>
                    <option value="Sauvignon Blanc">Sauvignon Blanc</option>
                    <option value="Semillón">Semillón</option>
                    <option value="Chardonnay">Chardonnay</option>
                    <option value="Torrontés">Torrontés</option>
                    <option value="Chenin">Chenin</option>
                    <option value="Riesling">Riesling</option>
                    <option value="Viognier">Viognier</option>
                </select>
            </div>            
        </div>
        <div class="col-md-2">
            <div id="filtro" >
                <h5 id="tit-filtro">País<?php echo ": ".$pais; ?></h5>
                <select id="pais" name="pais">
                    <option value="" selected="selected">----------------------------------</option>
                    <option value="Austria">Austria</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Chile">Chile</option>
                    <option value="España">España</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Francia">Francia</option>
                    <option value="Italia">Italia</option>
                    <option value="Nueva Zelanda">Nueva Zelanda</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Uruguay">Uruguay</option>
                </select>
            </div>            
        </div>
        <center>
            <div class="col-md-2" id="btn-filtraP">
                <button type="submit" class="btn" id="btnFiltroPrecio">
                    Filtrar
                </button>
                <a type="button" class="btn btn-default" id="btnFiltroPrecio" href="<?php echo SERVIDOR; ?>">Limpiar</a>
            </div>
        </center>

    </div>    
</form>
