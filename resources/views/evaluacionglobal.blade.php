@extends ('diagnostico')
@section('cuestionarios')
<div  style="width:70%; background:#fff;float:right; margin-top:1%">
	<div class="alert alert-info">Evaluacion global - Cuestionario </div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
		<form class="form-horizontal" action="" method="POST">
		<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-1 control-label label label-primary">Paciente :</label>
    <div class="col-lg-9">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="Luis Felipe Quisbert">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Estatura</label>
    <div class="col-lg-7">
      <input type="number" name="estatura" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite la estatura en metros">
    </div>
 	</div>
 	<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Peso</label>
    <div class="col-lg-7">
      <input type="number" name="estatura" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite el peso en Kg">
    </div>
 	</div> 	
 	
 	<fieldset style="border: 1px #555 solid; border-radius:5px;" >
 		<legend style="width:auto;">Cuestionario</legend>
 	
 	</fieldset>
	</div>
</div>
</form>

@stop 