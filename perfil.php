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
			<div class="text-center">
				<h1 class="color2">Comentar</h1>
			</div>
			<form action="module/insert.php" method="post">
				<input type="text" name="titulo" placeholder="Titulo">
				<textarea name="texto" type="texto" maxlength="500" cols="48" rows="10" class="textarea"></textarea>
				<div class="col-md-9">
					<input type="date" name="fecha" id="Fecha" step="1" min="2016-01-01" max="2020-12-31" value="<?php echo date("Y-m-d");?>">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default" id="postear">COMENTAR</button>
				</div>
			</form>

		</div>
		<div class="col-md-4" id="div-secundario">
			<h1 class="color2 pacifico text-center">My blog</h1> <br>
			<p class="color2"> NickName: <?php echo $_SESSION['user']; ?></p> <br>
			<a data-toggle="modal" data-target="#myModal" class="color2">Cambiar Contraseña</a>
			
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title color2" id="myModalLabel">Cambiar Contraseña</h4>
			      </div>
			      <div class="modal-body">

			        <form action="module/password.php" method="post" class="form-horizontal">
			        	<input type="password" name="oldpass" class="form-control pass" placeholder="Ingrese la contraseña actual">
			        	<input type="password" name="newpass" class="form-control pass" placeholder="Ingrese la contraseña nueva">
			        	<input type="password" name="repass"  class="form-control pass" placeholder="Repita la contraseña nueva">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			       		 <button type="submit" class="btn btn-primary">Save changes</button>
			        </form>

			      </div>
			     
			    </div>
			  </div>
			</div>
		</div>	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'hasiniciadosesion') { ?>
		<script>
			alert("Has iniciado sesion");
		</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'postear') { ?>
	<script>
		alert("Tu comentario ha sido guardado");
	</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'nopostear') { ?>
	<script>
		alert("Tu comentario no pudo ser posteado");
	</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'cambiolisto') { ?>
	<script>
		alert("La contraseña ha sido cambiada");
	</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'errorpasvieja') { ?>
	<script>
		alert("La contraseña actual no es la correcta");
	</script>
	<?php }elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'errorpasnueva') { ?>
	<script>
		alert("Las contraseñas nuevas no coinciden");
	</script>
	<?php } ?>  
</body>
</html>