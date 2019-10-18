<nav class="mb-4 navbar navbar-expand-lg navbar-dark indigo">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="home" class="navbar-brand" href="index.php?accion=Login"><span class="glyphicon glyphicon-home">GENESIS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!-- {if $TIPO eq "1"} -->
        <li><a href="index.php?accion=Usuario/Lista" ><span class="glyphicon glyphicon-user"></span>Usuarios</a></li>
        <li><a href="index.php?accion=Personal/Lista"><span class="glyphicon glyphicon-user"></span>Personal</a></li>
        <!-- {/if} -->
        <li><a href="index.php?accion=Mujeres/Lista"><span class="glyphicon glyphicon-list-alt"></span>Pacientes</a></li>
        <li> <a href="index.php?accion=Contrareferencia/Lista"><span class="glyphicon glyphicon-envelope"></span>Referencias Recibidas</a></li>
        <li><a href="index.php?accion=Reportes/Reportes"><span class="glyphicon glyphicon-list"></span>Reportes</a></li>
 <!--     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"role="button" aria-haspopup="true"
            aria-expanded="false">Reportes<span class="caret"></span></a>
              <ul class="dropdown-menu">

              </ul>
           </li>-->
        <!-- {if $TIPO eq "1"} -->
        <li><a href="index.php?accion=Mapas/Lista"><span class="glyphicon glyphicon-globe"></span>Mapa</a></li>
        <!-- {else} -->
        <li><a href="index.php?accion=Mapas/Mapas"><span class="glyphicon glyphicon-globe"></span>Mapa</a></li>
        <!-- {/if} -->
        <li><a href="index.php?accion=Logout"><span class="glyphicon glyphicon-off">Cerrar Session</a></li>
      </ul>
    </div>
  </div>
</nav>
