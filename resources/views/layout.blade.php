<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salud y vida</title>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo asset('assets/js/ajax.js')?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/bootstrap.css')?>">
    <script type="text/javascript" language="javascript" src="<?php echo asset('assets/js/bootstrap.js')?>"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/jquery.dataTables.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/form.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/shCore.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/table/demo.css')?>">
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" language="javascript" src="<?php echo asset('js/table/jquery.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo asset('js/table/jquery.dataTables.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo asset('js/table/shCore.js')?>"></script>
<script type="text/javascript" language="javascript" class="init">
      $(document).ready(function() {
    
        $('#example').DataTable();
      });
    </script>
</head>
<body style="background:rgba(19, 35, 47, 0.9);">
<div style="width:80%; margin-left:10%;">
	<nav class="navbar navbar-primary navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" style="padding:0px;"><img height="50px;" src="../../assets/img/salud.png"></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="{{url('pacientes')}}">Registrar paciente</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="#">Control</a></li>
      <li><a href="{{ url('diagnostico')}}">Diagnosticos</a></li>
      <li><a href="#">Reportes</a></li> 
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Perfil - <?php echo Auth::user()->NomMed.' '.Auth::user()->PatMed.' '.Auth::user()->MadMed?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Ver Perfil</a></li>
          <li><a href="#">Modificar Perfil</a></li>
          <li class="divider"></li>
          <li><a href="{{ url('logout')}}">Cerrar sesión </a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>

  </div>
</nav>
</div>
@yield('cuerpo')
</body>
</html>