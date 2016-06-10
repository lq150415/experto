@extends ('diagnostico')
@section('cuestionarios')
<div  style="width:70%; background:#fff;float:right; margin-top:1%">
  <div class="alert alert-info">Paciente - Perfil </div>
  <div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-3 control-label label label-primary">Paciente :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo $perfil->NomPas.' '.$perfil->PatMat.' '.$perfil->MatPas;?>">
    </div>
    </div>
    <br/>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-3 control-label label label-primary">Fecha de nacimiento :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo $perfil->FecNacPas;?>">
    </div>
    </div>
    <br/>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-3 control-label label label-primary">Telefono :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo $perfil->TelPas;?>">
    </div>
    </div>
  </div>
  @stop