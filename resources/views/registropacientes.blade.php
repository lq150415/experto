@extends ('layout')
@section('cuerpo')
<div class="container">
<div style="float:left; width:45%; border: 1px solid; color:#000; font-size:12px;">
	<div class="panel panel-success cuerpo">
  <div class="panel-heading titleform" >Formulario de registro de pacientes </div>
  <br/>
   <form class="form-horizontal" action="registrarpaciente" method="POST">
            	 <div class="form-group">
    <label for="" class="col-lg-4 control-label">Nombre</label>
    <div class="col-lg-7">
      <input type="text" name="nom_usu" value="<?=old("nom_usu")?>" class="form-control" id=""
             placeholder="Nombre del cliente">
    </div>
  </div>
   <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-4 control-label">Apellido paterno</label>
    <div class="col-lg-7">
      <input type="text" name="apa_usu" value="<?=old("apa_usu")?>" class="form-control" id="ejemplo_password_3" 
             placeholder="Apellido paterno">
    </div>
    </div>

    <div class="form-group">
    <label for="" class="col-lg-4 control-label">Apellido materno</label>
    <div class="col-lg-7">
      <input type="text" name="ama_usu" class="form-control" value="<?=old("ama_usu")?>" id=""
             placeholder="Apellido materno">
    </div>
    </div>
    <div class="form-group">
    <label for="" class="col-lg-4 control-label">Fecha de nacimiento</label>
    <div class="col-lg-7">
      <input type="date" name="fec_nac" class="form-control" value="<?=old("fec_nac")?>" id=""
             >
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-4 control-label">CI</label>
    <div class="col-lg-4">
      <input type="Number" name="ci_usu" value="<?=old("ci_usu")?>" class="form-control" id="ejemplo_password_3" 
             placeholder="Carnet">
    </div>
    <div class="col-lg-3">
      <select class="form-control" name="lug_usu">
        <option value="La Paz">LP</option>
        <option value="Oruro">OR</option>
        <option value="Potosi">PO</option>
        <option value="Cochabamba">CB</option>
        <option value="Tarija">TA</option>
        <option value="Sucre">CH</option>
        <option value="Santa Cruz">SC</option>
        <option value="Beni">BE</option>
        <option value="Pando">PA</option>
      </select>
    </div>
    </div>
    <div class="form-group">
    <label for="" class="col-lg-4 control-label">Sexo</label>
    <div class="col-lg-7">
      <select class="form-control" name="sex_usu">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        </select>
    </div>
    </div>
    <div class="form-group">
    <label for="" class="col-lg-4 control-label">Telefono</label>
    <div class="col-lg-7">
      <input type="tel" value="<?=old("tel_usu")?>" name="tel_usu" class="form-control" id=""
             placeholder="Telefono del cliente">

    </div>
    </div>
    <div class="form-group">
    <label for="" class="col-lg-4 control-label">Direccion</label>
    <div class="col-lg-7">
    <textarea type="text" name="dir_usu" value="<?=old("dir_usu")?>" class="form-control" id=""
             placeholder="Direccion de paciente"></textarea>
    </div>
    </div>
     <div class = "modal-footer">
            <button type = "submit" class = "btn btn-primary" data-dismiss = "modal"><span class="glyphicon glyphicon-check"></span>
              Registrar cliente
            </button>
            
            <button type = "button" class = "btn btn-danger"><span class="glyphicon glyphicon-trash"></span>
               Limpiar datos
            </button>
         </div>
    </form>

  <div class="table-responsive panel-body bodyform">
  	
  </div>
  </div>
</div>
<div style="float:right; left:45%; width:50%; color:#000; font-size: 12px; ">
<div class="panel panel-success cuerpo" style="padding: 20px 0px 0px 10px;">
	<fieldset>
	<legend>PACIENTES</legend>
	<table id="example" class="table table-hover" style="float:left;">
	<thead >
		<tr class="info">
			<th>CI</th>
      <th>PACIENTE</th>
      <th>TELEFONO</th>
      <th>DIRECCION</th>
			<th data-orderable="false"> </th>	
		</tr>
	</thead>
	
	<tbody style="font-size:11px;">
	   <?php if(count($pacientes)>0):?>
      <tr>
        <?php  
          foreach ($pacientes as $paciente):
          ?>
            <th><?php echo $paciente->CiPas;?></th>
            <th><?php echo $paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas;?></th>
            <th><?php echo $paciente->TelPas;?></th>
            <th><?php echo $paciente->DirPas;?></th>
            <th><a class="btn btn-success"  href="paciente/<?php echo $paciente->id;?>" title="Historial"> <span class="glyphicon glyphicon-search"> </span> </a></th> 
    </tr>
        <?php endforeach; endif;
      
      ?>
	</tbody>
</table>
</fieldset>
</div>
</div>
</div>
@stop