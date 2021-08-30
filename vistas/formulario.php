<?php
include_once "mostrar_errores.inc.php";

$titulo = "Formulario";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<br>
<br>
<br>
<div class="container">
	<div  class="jumbotron" style="background: linear-gradient(0deg, rgba(7,120,12,1) 0%, rgba(30,102,23,1) 43%, rgba(147,250,115,1) 100%);">
		<form id="formulario" enctype="multipart/form-data">
			<center >
				
				<h4>Escriba su nombre</h4> 
				<input id="nombre" placeholder="Nombre" type="text" REQUIRED name="nombre" >	
				<br><br>
				<h4>Escriba la dirección donde quiere recibir los productos</h4> 
				<input id="direccion" placeholder="Dirección" type="text" REQUIRED name="direccion" >	
				<br><br>
				<h4>Escriba un correo electrónico de contacto (opcional)</h4> 
				<input id="correoF" placeholder="Correo Electrónico" type="text" name="correo" >	
				<br><br>
				<h4>Escriba los productos que quiere comprar</h4> 
				<textarea id="productos" placeholder="Productos" type="text" REQUIRED name="productos"></textarea>
				<br><br>

				<input id="submit" type="submit">
			</center>
		</form>	
	</div>
</div>
<script>
	function isMobile() {
    if (sessionStorage.desktop)
        return false;
    else if (localStorage.mobile)
        return true;
    var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
    for (var i in mobile)
        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
    return false;
	}

	const formulario = document.querySelector('#formulario');
	const buttonSubmit = document.querySelector('#submit');
	const urlDesktop = 'https://web.whatsapp.com/';
	const urlMobile = 'whatsapp://';
	const telefono = <?php echo NUMERO_TEL ?>;

	formulario.addEventListener('submit', (event) => {
	    event.preventDefault()
	    buttonSubmit.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
	    buttonSubmit.disabled = true
	    setTimeout(() => {
	        let nombre = document.querySelector('#nombre').value
	        let direccion = document.querySelector('#direccion').value
	        let correo = document.querySelector('#correoF').value
	        let productos = document.querySelector('#productos').value
	        let mensaje = 'send?phone=' + telefono + '&text=*_Formulario Ideas del Vino_*%0A*¿Cual es su nombre?*%0A' + nombre + '%0A*¿Cuál es su dirección?*%0A' + direccion  + '%0A*¿Cuál es tu correo electrónico?*%0A' + correo  + '%0A*¿Cuáles productos quiere?*%0A'+ productos + ''
	        if(isMobile()) {
	            window.open(urlMobile + mensaje, '_blank')
	        }else{
	            window.open(urlDesktop + mensaje, '_blank')
	        }
	        buttonSubmit.innerHTML = '<i class="fab fa-whatsapp"></i> Enviar WhatsApp'
	        buttonSubmit.disabled = false
	    }, 3000);
	});
</script>


<!-- Botón Menú -->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="<?php echo SERVIDOR ?>">Inicio</a>
        <a href="<?php echo SERVIDOR."#nuestros-vinos" ?>"> Tienda  </a>
        <a href="<?php echo SERVIDOR."#nosotros"?>">Nosotros</a>
        <a href="<?php echo SERVIDOR."#blog"?>">Blog</a>
        <a href="<?php echo SERVIDOR."#piePagina"?>">Redes sociales</a>
    </div>
</div>
<!-- Botón Menú -->
<div id="menu" >
    <span id="btn-menu" class="btnMenuF" onclick="openNav()" >&#9776; Menú</span>
</div> 
<!-- Redes Sociales -->

<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>

<!-- Fin Redes Sociales -->
<?php 
include_once "plantillas/documento-cierre.inc.php";
?>  