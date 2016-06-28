@extends ('layout')
@section('cuerpo')
<div class="container">
<div  style="width:90%; background:#fff; margin-top:1%">
	<div class="alert alert-success">IMC - Diagnostico <a href="../../<?php echo "paciente/".$id;?>" style="margin-left:58%;" class="btn btn-primary">Realizar nuevo diagnostico</a> </div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
	 <div class="form-group">
    <label for="" class="col-lg-3 control-label label label-primary">Nombre del paciente :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo $paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas;?>">
    </div>
    </div><br/>
    <div class="form-group">
    <label for="" class="col-lg-3 control-label label label-primary">Peso :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="peso"  class="form-control" id="" value="<?php echo $diagnostico->pesAct;?>">
    </div>
    </div><br/>
    <div class="form-group">
    <label for="" class="col-lg-3 control-label label label-primary">Estatura :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo $diagnostico->estatura;?>">
    </div>
    </div><br/>
    <div class="form-group">
    <label for="" class="col-lg-3 control-label label label-primary">Indice de masa corporal :</label>
    <div class="col-lg-6">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="<?php echo round($diagnostico->imc,2);?>">
    </div>
    </div><br/>
    
     <div class="form-group">
    <label for="" class="col-lg-3 control-label label label-primary">Peso Ideal:</label>
    <div class="col-lg-6">
      <input type="text" readonly name="pesoideal"  class="form-control" id="" value="<?php echo round(($diagnostico->estatura)*($diagnostico->estatura)*23);?>">
    </div>
    </div><br/><br/>
     <div class="form-group">
           <?php if($mensaje2=='Desnutricion'):?>
            <div class="alert alert-danger">
            <b>Diagnostico</b>
            <br/><br/>
            <p>El estado nutricional del paciente es desnutricion</p>
            <p>El paciente tiene indices de tener desnutricion se recomienda seguir la dieta</p><br/>
            <a href="dietades" target="_blank" class="btn btn-danger">Generar dieta</a>
         <?php endif;?>
         </div>
         </div>
         <div class="form-group">
           <?php if($mensaje2=='Normal'):?>
            <div class="alert alert-success">
            <b>Diagnostico</b>
            <br/><br/>
            <p>El estado nutricional del paciente es normal</p>
            <p>El paciente se encuentra saludable, solo algunas recomendaciones para seguir asi</p><br/>
            <a href="dietanor" target="_blank" class="btn btn-success">Recomendaciones</a>
         <?php endif;?>
       
         <div class="form-group">
           <?php if($mensaje2=='Riesgo de Desnutricion'):?>
            <div class="alert alert-warning">
            <b>Diagnostico</b>
            <br/><br/>
            <p>El estado nutricional del paciente es desnutricion</p>
            <p>El paciente tiene indices de tener desnutricion se recomienda seguir la dieta</p><br/>
            <a href="dietades" target="_blank" class="btn btn-danger">Generar dieta</a>
         <?php endif;?>
         
         <div class="form-group">
           <?php if($mensaje2=='Sobrepeso'):?>
            <div class="alert alert-warning">
            <b>Diagnostico</b>
            <br/><br/>
            <p>El estado nutricional del paciente es sobrepeso</p>
            <p>El paciente tiene indices de tener sobrepeso se recomienda seguir la dieta</p><br/>
            <a href="dietaobe" target="_blank" class="btn btn-danger">Generar dieta</a>
         <?php endif;?>
      
         <div class="form-group">
           <?php if($mensaje2=='Obesidad'):?>
            <div class="alert alert-danger">
            <b>Diagnostico</b>
            <br/><br/>
            <p>El estado nutricional del paciente es obesidad</p>
            <p>El paciente tiene indices de tener sobrepeso se recomienda seguir la dieta</p><br/>
            <a href="dietaobe" target="_blank" class="btn btn-danger">Generar dieta</a>
         <?php endif;?>
         </div>
         </div>
	</div>
</div>
</div>
@stop