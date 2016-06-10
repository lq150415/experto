@extends ('layout')
@section('cuerpo')
<div class="container">
<div  style="width:70%; background:#fff; margin-top:1%">
	<div class="alert alert-success">Cribaje - Cuestionario </div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
	 <?php if ($mensaje):
             if($mensaje=='Estado nutricional: Normal'){?>
        		<div class="alert alert-success"><label><?php
         echo $mensaje?></label>
         <div class="form-group">
         	<p>El estado del paciente es normal</p>
         	<button class="btn btn-success">Recomendaciones</button>
         </div>
         </div>
             <?php }
         if($mensaje=='Estado nutricional: Riesgo de malnutricion'){?>
        		<div class="alert alert-warning"><label><?php
         echo $mensaje?></label>
         <div class="form-group">
         	<b>Diagnostico</b>
         	<p>El estado nutricional del paciente es Obesidad</p>
         	<button class="btn btn-warning">Generar Dieta</button>
         </div>
         </div>
             <?php }
          if($mensaje=='Estado nutricional: Malnutricion'){?>
        		<div class="alert alert-danger"><label><?php
         echo $mensaje?></label>
         <div class="form-group">
         	<b>Diagnostico</b>
         	<p>El estado nutricional del paciente es Obesidad</p>
         	<button class="btn btn-danger">Generar dieta</button>
         </div>
         </div>

     
         <?php }endif;?>
	</div>
</div>
</div>
@stop