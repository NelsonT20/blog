
<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location: perfil.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css">
</head>
<body>
	<nav class="row padding-largo nav-color text-center">
		<ul class="no-lista">
			<li class="col-md-4"><a href="index.php" class="pacifico color">My Blog</a></li>


			<div class="dropdown col-md-4 ">
			<button class="btn dropdown-toggle pacifico color boton" type="button" data-toggle="dropdown">Iniciar Sesion
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
				    <li><a href="login.php">Iniciar sesion</a></li>
				    <li><a href="module/logout.php">Cerrar sesion</a></li>
				</ul>
			
			</div> 
			<li class="col-md-4"><a href="crear-usuario.php" class="pacifico color">Crear Cuenta</a></li>
		</ul>
	</nav>
	
	<div class="row  text-center">
		<h1 class="color">Bienvenidos a <span class="pacifico">My Blog</span></h1>

	</div>
	<form action="module/singin.php" method="post">
		<div class="login-form">
	     <h1 class="color2">Login</h1>
	     <div class="form-group ">
	       <input type="text" class="form-control" placeholder="Username" required name="userName" id="UserName">
	       <i class="fa fa-user"></i>
	     </div>
	     <div class="form-group log-status">
	       <input type="password" class="form-control" placeholder="Password" required name="password" id="Passwod">
	       <i class="fa fa-lock"></i>
	     </div>
	     <button type="submit" class="log-btn" >Log in</button>
	     
	    
	    </div>
	</form>
	<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'errorpass') { ?>
		<script>
			alert("Error en la contraseña");
		</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'erroruser') { ?>
		<script>
			alert("El usuario no existe");
		</script>
	<?php } ?>
</body>
</html>