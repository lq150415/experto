@extends ('layout')
@section('cuerpo')
<div class="container">
<div  style="width:100%; background:#fff;float:right; margin-top:1%">
	<div class="alert alert-success">Indice de masa corporal - IMC <a style="margin-left:55%;" href="../<?php echo $id;?>" class="btn btn-primary">Realizar nuevo diagnostico</a></div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
		<form class="form-horizontal" action="diagnosticarimc" method="POST">
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
  <div class = "modal-footer">
            <button type = "submit" class = "btn btn-primary" data-dismiss = "modal"><span class="glyphicon glyphicon-check"></span>
              Diagnosticar
            </button>
            
            
         </div>
  </div>
</div>
</form>
</div>

@stop 