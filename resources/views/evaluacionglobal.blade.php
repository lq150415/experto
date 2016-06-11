@extends ('layout')
@section('cuerpo')
<div class="container">
<div  style="width:100%; background:#fff;margin-top:1%">
	<div class="alert alert-info">Evaluacion global - Cuestionario <a style="margin-left:55%;" href="../<?php echo $id;?>" class="btn btn-primary">Realizar nuevo diagnostico</a></div>
	<div class="alert panel panel-success cuerpo" style="background:#fff; margin-top:-2.7%">
		<form class="form-horizontal" action="evaluacionglobal" method="POST">
		<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-1 control-label label label-primary">Paciente :</label>
    <div class="col-lg-9">
      <input type="text" readonly name="estatura"  class="form-control" id="" value="Luis Felipe Quisbert">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Estatura</label>
    <div class="col-lg-7">
      <input type="number" name="estatura" step="any" value="<?=old("estatura")?>" class="form-control" id=""
             placeholder="Digite la estatura en metros">
    </div>
 	</div>
 	<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Peso</label>
    <div class="col-lg-7">
      <input type="number" name="peso" value="<?=old("estatura")?>" class="form-control" id=""
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
  
 	<fieldset style="border: 1px #555 solid; border-radius:5px;padding:0 10px 10px 10px;"  >
 		<legend style="width:auto;">Cuestionario</legend>
 	
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
    <input type="radio" name="opciones" id="opciones_2" value="1" >
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
    <input type="radio" name="opciones1" id="opciones_1" value="0" checked>
    a)   Perdido de peso >3 kg 
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_2" value="1" >
    b)  No lo sabe 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_3" value="2">
   c) Pérdida de peso entre 1>3 kg

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones1" id="opciones_3" value="3">
   d)    No perdido peso


  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">Movilidad : </label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_1" value="0" checked>
    a) Del trabajo a la casa

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_2" value="1" >
   b)  Realiza caminatas 

  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones2" id="opciones_3" value="2">
   c) Realiza actividades físicas 

  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Ha tenido alguna enfermedad o situaciones de estrés en los últimos meses?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_1" value="0" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones3" id="opciones_2" value="1" >
    b) No 
  </label>
</div>
     <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Cuantas comidas completas toma al día? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones4" id="opciones_1" value="0" checked>
    a) 1 comida
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones4" id="opciones_2" value="1" >
    b) 2 comidas 
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones4" id="opciones_3" value="2">
    c) 3 comidas
  </label>
</div>
  
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿El paciente vive solo?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones5" id="opciones_1" value="1" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones5" id="opciones_2" value="0" >
    b) No 
  </label>
</div>
<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿El paciente toma medicamentos?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones6" id="opciones_1" value="1" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones6" id="opciones_2" value="0" >
    b) No 
  </label>
</div>
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Cuando almuerza o cena deja el plato? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones7" id="opciones_1" value="0" checked>
    a) Deja la mitad del plato
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones7" id="opciones_2" value="1" >
    b) Deja la tercera parte del plato
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones7" id="opciones_3" value="2">
    c) Deja la mitad del plato
  </label>
</div>
<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Huevo o legumbres 1 o 2 veces a la semana?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones8" id="opciones_1" value="1" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones8" id="opciones_2" value="0" >
    b) No 
  </label>
</div>
<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Come carne  o pescado diariamente?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones9" id="opciones_1" value="1" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones9" id="opciones_2" value="0" >
    b) No 
  </label>
</div>
<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left">¿Consume frutas o verduras al menos 2 veces al día?  :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones9" id="opciones_1" value="1" checked>
    a) Si 

  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones9" id="opciones_2" value="0" >
    b) No 
  </label>
</div>
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Cuantos vasos  de agua u otro liquido toma al día? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones10" id="opciones_1" value="0" checked>
    a) Menos de 3
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones10" id="opciones_2" value="1" >
    b) De 3 a 5 vasos
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones10" id="opciones_3" value="2">
    c) Mas de 5 vasos
  </label>
</div>
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿Se considera al paciente que está bien nutrido en el aspecto físico? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones11" id="opciones_1" value="0" checked>
    a) Nutricion grave
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones11" id="opciones_2" value="1" >
    b) No lo sabe o nutricion moderada
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones11" id="opciones_3" value="2">
    c) Sin problema
  </label>
</div>
<div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-11 control-label" style="text-align:left"> ¿En comparación con las personas de su edad como encuentra al paciente en su estado de salud? :</label>
    </div>
    <div class="radio">
  <label>
    <input type="radio" name="opciones12" id="opciones_1" value="0" checked>
    a) Peor
  </label>
</div>
  <div class="radio">
  <label>
    <input type="radio" name="opciones12" id="opciones_2" value="1" >
    b) No lo sabe
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="opciones12" id="opciones_3" value="2">
    c) Igual
  </label>
</div>
 <div class="radio">
  <label>
    <input type="radio" name="opciones12" id="opciones_1" value="0" >
    d) Mejor
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