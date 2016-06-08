<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salud y vida</title>
		<script type="text/javascript" src="<?php echo asset('assets/js/ajax.js')?>"></script>
 	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
 	<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/bootstrap.css')?>">
		<script type="text/javascript" language="javascript" src="<?php echo asset('assets/js/bootstrap.js')?>"></script>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    	<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Identificarse</a></li>
        <li class="tab"><a href="#signup">Registrarse</a></li>
      </ul>
      
      <div class="tab-content">
        
        <div id="login">   
          <h1>Bienvenido</h1>
          @if (count($errors))
          <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>  <strong>Usuario y/o contraseña incorrectos </strong></li>
        @endforeach
    </ul>
    </div>
@endif
          <form action="login" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="text" name="UsuMed" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          
          
          <button class="button button-block"/>Ingresar</button>
          
          </form>

        </div>
        <div id="signup">   
          <h1>Registro de medicos</h1>
          
          <form action="registro" method="POST">
          <div class="field-wrap">
            <label>
              Nombre(s)<span class="">*</span>
            </label>
            <input type="text" name="nommed" required autocomplete="off"/>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Apellido Paterno<span class="req">*</span>
              </label>
              <input type="text" name="patmed" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido Materno<span class="req">*</span>
              </label>
              <input type="text" name="madmed" required autocomplete="off"/>
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Cedula de identidad<span class="req">*</span>
              </label>
              <input type="number" name="cimed" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              
              <select type="text" name="expmed" required autocomplete="off">
                  <option style="background:rgba(19, 35, 47, 0.9);">Seleccione</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">LP</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">CB</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">SC</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">PO</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">OR</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">BE</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">PA</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">CH</option>
                  <option style="background:rgba(19, 35, 47, 0.9);">TJ</option>

              </select>
            </div>
          </div>
          <div class="field-wrap">
            <label style="padding-left:40%;">
              Fecha de nacimiento<span class="">*</span>
            </label>
            <input type="date" name="fecnacmed" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Nick de usuario<span class="req">*</span>
            </label>
            <input type="text" name="usumed" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Registrarse</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
</body>
</html>