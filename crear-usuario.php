
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css">
	<title>Document</title>
</head>
<body>
	<nav class="row padding-largo nav-color text-center">
		<ul class="no-lista">
			<li class="col-md-4"><a href="index.php" class="pacifico color">My Blog</a></li>
			<li class="col-md-4"><a href="perfil.php" class="pacifico color">Mi Cuenta</a></li>
			<div class="dropdown col-md-2 ">
			<button class="btn dropdown-toggle pacifico color boton" type="button" data-toggle="dropdown">Iniciar Sesion
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
				    <li><a href="login.php">Iniciar sesion</a></li>
				    <li><a href="module/logout.php">Cerrar sesion</a></li>
				</ul>
			
			</div> 
			<li class="col-md-2"><a href="crear-usuario.php" class="pacifico color">Crear Cuenta</a></li>
		</ul>
	</nav>

	<div class="row  text-center">
		<h1 class="color">Bienvenidos a <span class="pacifico">My Blog</span></h1>

	</div>
	<form action="module/registers.php" method="post" class="form-horizontal text-center crear1" name="form1">
			<h2 class="color">Crear una cuenta</h2>
		<div class="form-group">
			<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Ingrese su nickname</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="text" name="Nickname" class="form-control" required placeholder="Ingrese Su Nickname" maxlength="15">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Ingrese su nombre</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="text" name="Name" class="form-control" required placeholder="Ingrese su nombre" maxlength="15">
			</div>
		</div>
		<div class="form-group">
				<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Ingrese su apellido</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="text" name="LastName" class="form-control" required placeholder="Ingrese su apellido" maxlength="15">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Email</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="email" name="Email" class="form-control" required placeholder="Ingrese su email" maxlength="50">
			</div>
		</div>
		<div class="form-group">
		<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Escriba su contraseña</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="password" name="Password" class="form-control" required placeholder="Ingrese su contraseña"maxlength="15">
			</div>
		</div>
		<div class="form-group">
		<label class="col-lg-5 control-label col-xs-4 col-sm-4 color">Repita su contraseña</label>
			<div class="col-lg-5 col-xs-4 col-sm-4">
				<input type="password" name="RepeatPassword" class="form-control" required placeholder="Repita su contraseña" maxlength="15">
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-offset-5 col-lg-7 col-xs-4 col-sm-4" >
		      <button type="submit" class="btn btn-default" id="reg-btn">Registrar</button>
		    </div>
		</div>

	</form>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>


	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'registrado') { ?>
	<script>
		alert("Registrado con exito");
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'yaregistrado') { ?>
	<script>
		alert("Ese usuario ya existe");
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'yaregistradoemail') { ?>
	<script>
		alert("Ese Correo ya existe");
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'passsame') { ?>
	<script>
		alert("Las contraseñas no coinciden");
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		alert("error");
	</script>
	<?php } ?>


</body>
</html>
