@extends ('layout')
@section('cuerpo')
<div class="container">
<div  style="width:100%; background:#fff; margin-top:1%">
	<div class="alert alert-success">Cribaje - Cuestionario <a style="margin-left:62%;" href="../<?php echo $id;?>" class="btn btn-primary">Realizar nuevo diagnostico</a></div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
		<form class="form-horizontal" action="diagnosticar" method="POST">
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-1 control-label label label-primary">Paciente :</label>
    <div class="col-lg-9">
      <input type="text" readonly name="paciente"  class="form-control" id="" value="<?php echo $paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas;?>">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-1 control-label label label-primary">Edad :</label>
    <div class="col-lg-9">
      <input type="text" readonly name="edad"  class="form-control" id="" value="<?php 
      $edad = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
      $edad2 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
      $edad3 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
      
       echo $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;
       ?>">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-1 control-label label label-primary">Sexo :</label>
    <div class="col-lg-9">
      <input type="text" readonly name="sexo"  class="form-control" id="" value="<?php echo $paciente->SexPas;?>">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Estatura</label>
    <div class="col-lg-7">
      <input type="number" step="any" name="estaturaactual" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite la estatura en metros">
    </div>
 	</div>
 	<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Peso</label>
    <div class="col-lg-7">
      <input type="number" step="any" name="pesoactual" value="<?=old("estatura")?>"  class="form-control" id=""
             placeholder="Digite el peso en Kg">
    </div>
 	</div> 	
 	<fieldset style="border: 1px #555 solid; border-radius:5px; padding:0 10px 10px 10px;" >
 		<legend style="width:auto; border-bottom:0px;">Cuestionario</legend>
      <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Ha comido menos por falta de apetito o alguna otra causa en los últimos 3 meses? : </label>
    </div>
    <div class="radio">
  <label style="text-align:left">
    <input type="radio" name="opciones" id="opciones_1" value="0" checked>
    a) Ha comido mucho menos 
  </label>
</div>
  <div class="radio">
  <label >
    <input type="radio" name="opciones" id="opciones_2" value="1" checked>
    b) Ha comido menos 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="2">
    c) Ha comido igual
  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Ha perdido peso en los últimos 3 meses?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_1" value="0" checked>
    a)   Perdido de peso >3 kg 
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_2" value="1" checked>
    b)  No lo sabe 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_3" value="2">
   c) Pérdida de peso entre 1>3 kg

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_3" value="3">
   d)    No perdido peso


  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">Movilidad : </label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_1" value="0" checked>
    a) Del trabajo a la casa

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_2" value="1" checked>
   b)  Realiza caminatas 

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_3" value="2">
   c) Realiza actividades físicas 

  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Ha tenido alguna enfermedad o situaciones de estrés en los últimos meses?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones4" id="opciones_1" value="0" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones4" id="opciones_2" value="1" checked>
    b) No 
  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Cuantas comidas completas toma al día? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones5" id="opciones_1" value="0" checked>
    a) 1 comida
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones5" id="opciones_2" value="1" checked>
    b) 2 comidas 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones5" id="opciones_3" value="2">
    c) 3 comidas
  </label>
</div>
     <div class = "modal-footer">
            <button type = "submit" class = "btn btn-primary" data-dismiss = "modal"><span class="glyphicon glyphicon-check"></span>
              Diagnosticar
            </button>
            
            
         </div>
 	</fieldset>
	</div>
</div>
</div>
</form>

@stop 