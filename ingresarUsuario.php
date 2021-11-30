<?php






?>


<html>
	<head>
		<title>Registro de usuarios</title>
		
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
	
	</head>

	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Menu de registro</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Iniciar Sesión</a></div>
					</div>  
					
					<div class="panel-body">
					<form id="signupform" class="form-horizontal" role="form" action="insertar.php" method="POST" autocomplete="off">
					
					<div id="signupalert" style="display:none" class="alert alert-danger">
							<p>Error:</p>
							<span></span>
					</div>
					
					
					
					<div class="form-group">
						<label for="nombreEmpresa" class="col-md-3 control-label">Nombre Empresa</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nombreEmpresa" placeholder="Ingrese aqui" required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="pais" class="col-md-3 control-label">País</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="pais" placeholder="Ingrese aqui" required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="telefono" class="col-md-3 control-label">Telefono</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="telefono" placeholder="Ingrese aqui"  required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="nombreEncargado" class="col-md-3 control-label">Nombre del encargado</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nombreEncargado" placeholder="Ingrese aqui"  required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="correoElectronico" class="col-md-3 control-label">Correo electronico</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="correoElectronico" placeholder="Ingrese aqui" required autocomplete="nope">
						</div>
					</div>
					
					<div class="form-group">
						<label for="contrasenia" class="col-md-3 control-label">Contraseña</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="contrasenia" placeholder="Ingrese aqui" required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="con_password" class="col-md-3 control-label">Confirmar contraseña</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="con_password" placeholder="Ingrese aqui"  required >
						</div>
					</div>
					
					<div class="form-group">                                      
						<div class="col-md-offset-3 col-md-9">
							<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
						</div>
					</div>					
					</form>
					</div>
				</div>
			</div>
		</div>
        
        
        
        
        
        
	</body>



</html>

