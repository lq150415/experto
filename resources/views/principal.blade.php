@extends ('layout')
@section('cuerpo')
<div class="container">
  <div class="jumbotron" style="padding:0px; width:80%; ">
    <img src="assets/img/fondo.jpg">
  </div>
  <div class="alert alert-danger">
  <center>
    BIENVENIDO AL SISTEMA EXPERTO - <?php echo Auth::user()->NomMed.' '.Auth::user()->PatMed.' '.Auth::user()->MadMed?>
  </center>
  </div>
      
</div>
@stop