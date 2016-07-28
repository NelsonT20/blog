<?php include("module/conexion.php");
		$connection = connectDatabase();
		session_start();
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
			<?php if(!(isset($_SESSION['user']))){ ?> 
				<li class="col-md-4"><a href="" class="pacifico color"></a></li>
			<?php } else { ?>   
			<li class="col-md-4"><a href="perfil.php" class="pacifico color">Mi Cuenta</a></li>
			<?php } ?>
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
		<h1 class="color">Bienvenido a <span class="pacifico">My Blog</span></h1>
	</div>

		<div class="col-md-6" id="div-principal">
			<h1 class="color2 pacifico text-center">Historial</h1>
			<?php 
				$sqlQuery = "SELECT * FROM comentario";
				$result = $connection->query($sqlQuery);
				while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['id_comentario'].'">'.$row['titulo'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y ', strtotime($row['fecha'])).'</p>';
						echo '<p>'.$row['texto'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['id_comentario'].'">Read More</a></p>';
					echo '</div>';
				}

			 ?>
		</div>

		<div class="col-md-4" id="div-secundario">
			<h1 class="color pacifico text-center">My blog</h1> <br>
			<p>My blog ha sido creado por Nelson Torres</p> <br>
			<p>Este blog ha sido creado sin fines lucrativos</p>
		</div>	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'hascerradosesion') { ?>
		<script>
			alert("Has cerrado sesion");
		</script>
	<?php }?>
	
</body>
</html>
