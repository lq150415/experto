@extends ('diagnostico')
@section('cuestionarios')
<div  style="width:70%; background:#fff;float:right; margin-top:1%">
	<div class="alert alert-success">Cribaje - Cuestionario </div>
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
 	<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Circunferencia del brazo</label>
    <div class="col-lg-7">
      <input type="number" name="CMB" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite la circunferencia del brazo">
    </div>
 	</div>
 	<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Pliegue Tripcial</label>
    <div class="col-lg-7">
      <input type="number" name="CMB" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite el pliegue tripcial">
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
    <input type="radio" name="opciones" id="opciones_1" value="0" checked>
    a)   Perdido de peso >3 kg 
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="1" checked>
    b)  No lo sabe 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="2">
   c) Pérdida de peso entre 1>3 kg

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="3">
   d)    No perdido peso


  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">Movilidad : </label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_1" value="0" checked>
    a) Del trabajo a la casa

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="1" checked>
   b)  Realiza caminatas 

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="2">
   c) Realiza actividades físicas 

  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Ha tenido alguna enfermedad o situaciones de estrés en los últimos meses?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_1" value="0" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="1" checked>
    b) No 
  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Cuantas comidas completas toma al día? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_1" value="0" checked>
    a) 1 comida
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="1" checked>
    b) 2 comidas 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones" id="opciones_3" value="2">
    c) 3 comidas
  </label>
</div>
     <div class = "modal-footer">
            <button type = "submit" class = "btn btn-primary" data-dismiss = "modal"><span class="glyphicon glyphicon-check"></span>
              Registrar cliente
            </button>
            
            <button type = "button" class = "btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
               Limpiar datos
            </button>
         </div>
 	</fieldset>
	</div>
</div>
</form>

@stop 