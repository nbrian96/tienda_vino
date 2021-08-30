<?php 
session_start();
include_once "mostrar_errores.inc.php";

$titulo = "Iniciar Sesión";

include_once "plantillas/documento-apertura.inc.php";

if (isset($_POST['login'])) {

	if ($_POST["usuario"] == NOMBRE_USER & $_POST["clave"] == CLAVE_USER) {
		
		$_SESSION['usuario'] = NOMBRE_USER;
		
	    header("Location: ".USER);
	    exit();
	} else {	
?>
		<div class="bg">
			<br><br>
			<center>
				<div id="err_login">
					<h2><b>Datos inválidos</b></h2>
					<hr id="separador-admin">
					<br>
					<a href="<?php echo LOGIN_ADMIN; ?>" type="button" class="btn btn-primary">Volver a Intentarlo</a>	
				</div>
			</center>			
		</div>
<?php
	} 
} else {
?>
	<div class="bg">
		<div class="caption">
			<form action="<?php echo htmlspecialchars(LOGIN_ADMIN); ?>" method="post" id="container-login" class="container">
		    	<h1 class="text-center"><b>Iniciar Sesión<b></h1>

			    <label><b>Usuario</b></label>
			    <input type="text" placeholder="Introduzca usuario" name="usuario" required autofocus>

			    <label><b>Contraseña</b></label>
			    <input type="password" placeholder="" name="clave" required>

			    <button type="submit" id="enviar" name="login" class="btn">Entrar</button>
			</form>
		</div>	
	</div>
	
<?php
}
include_once "plantillas/documento-cierre-bis.inc.php";
?>