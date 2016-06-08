@extends ('layout')
@section('cuerpo')
<div class="container">
<div style="float:left; width:45%; border: 1px solid; color:#000; font-size:12px;">
	<div class="panel panel-success cuerpo">
  <div class="panel-heading titleform" >Formulario de registro de pacientes </div>
  <br/>
   <form class="form-horizontal" action="registrarcliente" method="POST">
            	 <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Nombre</label>
    <div class="col-lg-7">
      <input type="text" name="nom_usu" value="<?=old("nom_usu")?>" class="form-control" id="ejemplo_email_3"
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
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Apellido materno</label>
    <div class="col-lg-7">
      <input type="text" name="ama_usu" class="form-control" value="<?=old("ama_usu")?>" id="ejemplo_email_3"
             placeholder="Apellido materno">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-4 control-label">CI</label>
    <div class="col-lg-7">
      <input type="text" name="apa_usu" value="<?=old("apa_usu")?>" class="form-control" id="ejemplo_password_3" 
             placeholder="Numero de CI">
    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Telefono</label>
    <div class="col-lg-7">
      <input type="tel" value="<?=old("tel_usu")?>" name="tel_usu" class="form-control" id="ejemplo_email_3"
             placeholder="Telefono del cliente">

    </div>
    </div>
    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">E-mail</label>
    <div class="col-lg-7">
      <input type="email" name="ema_usu" value="<?=old("ema_usu")?>" class="form-control" id="ejemplo_email_3"
             placeholder="Direccion e-mail del cliente">

    </div>
    </div>

    <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-4 control-label">Direccion</label>
    <div class="col-lg-7">
    <textarea type="text" name="dir_usu" value="<?=old("dir_usu")?>" class="form-control" id="ejemplo_email_3"
             placeholder="Direccion de cliente"></textarea>
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
<div style="float:right; left:55%; width:50%; color:#000; font-size: 12px; ">
<div class="panel panel-success cuerpo" style="padding: 20px 0px 0px 10px;">
	<fieldset>
	<legend>PACIENTES</legend>
	<table id="example" class="table table-hover" style="float:left;">
	<thead >
		<tr class="info">
			<th>PACIENTE</th>
			<th>TELEFONO</th>
      		<th>DIRECCION</th>
			<th>E-MAIL</th>
			<th data-orderable="false"> </th>	
		</tr>
	</thead>
	
	<tbody style="font-size:11px;">
	
	</tbody>
</table>
</fieldset>
</div>
</div>
</div>
@stop