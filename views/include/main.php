<!--Barra horizontal de las dashboard-->
<div class="BGB_barraHorizontal">
<nav class=" navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Mentalidad Fitness</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <div class="BGB_boton_cerrar">
      <div class="btn-group">
        <button type="button" class="btn btn-warning"><?php echo $_SESSION["user"]["name"]; ?></button>
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="?c=access&a=close"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
        </ul>
      </div>
    </div>
    </ul>
  </div>
</nav>
</div>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
      <!-- Adadptar a movil
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MENTALIDAD FITNESS</a>
      </div>
  -->
  <!--Toda la parte vertial de la dashboard-->
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li class=""><a href="?c=user&a=dashboard">INICIO<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">COMIDAS <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cutlery"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="?c=food">Gestionar Alimentos</a></li>
            <li><a href="?c=breakfast">Gestionar Desayunos</a></li>
            <li><a href="?c=lunch">Gestionar Almuerzos</a></li>
            <li><a href="?c=snack">Gestionar Snacks</a></li>
            <li><a href="?c=dinner">Gestionar Cenas</a></li>
            <li><a href="?c=diet">Dietas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">SEGURIDAD <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-lock"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="?c=role">Rol</a></li>
            <li><a href="?c=user">Usuario</a></li>
            <li><a href="?c=page">Pagina</a></li>
          </ul>
        </li>
              <li ><a href="?c=exercise">EJERCICIO<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-scale"></span></a></li>
          </ul>
      </div>
  </div>
</nav>
<div class="main"><!-- ESTE DIV ABRE LA ETIQUETA DIV CLASS="MENU" QUE ESTA EN EL MAIN UBICADO EN LA CARPETA INCLUDE Y CIERRA EN LA VISTA-->
