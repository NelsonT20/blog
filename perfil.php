<?php session_start(); 

?> 
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
		<h1 class="color">Bienvenido <span class="pacifico"><?php echo $_SESSION['user']; ?></span></h1>
		
		
	</div>

		<div class="col-md-6" id="div-principal">
			<form action="module/insert.php" method="post">
				<textarea name="Text" cols="48" rows="6" class="textarea"></textarea>
				<div class="col-md-10">
					<input type="date" name="Fecha" id="Fecha" step="1" min="2013-01-01" max="2013-12-31" value="<?php echo date("Y-m-d");?>">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default" id="postear">Postear</button>
				</div>
			</form>
		</div>
		<div class="col-md-4" id="div-secundario">
			<h1 class="color2 pacifico text-center">My blog</h1> <br>
			<p class="color2"> NickName: <?php echo $_SESSION['user']; ?></p>
			
		</div>	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'hasiniciadosesion') { ?>
		<script>
			alert("Has iniciado sesion");
		</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'registrado') { ?>
	<script>
		alert("Registro el id");
	</script>
	<?php } ?>
</body>
</html>