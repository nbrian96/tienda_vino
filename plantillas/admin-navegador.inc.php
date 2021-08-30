<nav class="navbar navbar-default" style="border: 0em;">
  <div class="container-fluid" style="background-color: black; color: white;">
    <div class="navbar-header">
      <button id="desplegable-admin" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="navbar-admin" class="navbar-brand" href="#">
        Administracion General
      </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">        
        <li>
          <a id="navbar-admin" href="<?php echo USER;?>">
            <i class="fa fa-bars" aria-hidden="true"></i> Inicio Administrador
          </a>
        </li>
        <li>
          <a id="navbar-admin" href="<?php echo SERVIDOR;?>">
            <span class="glyphicon glyphicon-home" aria-hidden="true" ></span> Ir a Página Principal
          </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a id="navbar-admin" href="<?php echo CERRAR_SESION; ?>">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión
          </a>
        </li>
      </ul>
      </div>     
    </div>
</nav>