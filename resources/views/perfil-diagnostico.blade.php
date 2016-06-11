@extends ('diagnostico')
@section('cuestionarios')

<script language="JavaScript">
    function muestra_oculta(id){
    if(document.getElementById){
    var el = document.getElementById(id);
    el.style.display = (el.style.display == 'block') ? 'none' : 'block';
   
    
    }
    }
    window.onload = function(){
    muestra_oculta('contenido_a_mostrar');
    }
    </script>

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
<br/><br/><br/><br/>
  <div id="contenido_a_mostrar" style="display:block;">
    <div class="table table-responsive">
      <table id="example" class="table table-hover" style="float:left;">
  <thead >
    <tr class="info">
      <th>CODIGO</th>
      <th>FECHA</th>
      <th>MEDICO</th>
      <th>PESO </th>
      <th>ESTATURA</th>
      
    </tr>
  </thead>
  
  <tbody style="font-size:11px;">
     <?php if(count($diagnosticos)>0):?>
      <tr>
        <?php  
          foreach ($diagnosticos as $diagnostico):
          ?>
            <th><?php echo $diagnostico->CodDia;?></th>
            <th><?php echo $diagnostico->fecDia;?></th>
            <th><?php echo $diagnostico->CodMed?></th>
            <th><?php echo $diagnostico->pesAct;?></th>
            <th><?php echo round($diagnostico->estatura,2);?></th>
            
    </tr>
        <?php endforeach; endif;
      
      ?>
  </tbody>
</table>
      </div>
    </div>
    </div>

  </div>

  @stop
