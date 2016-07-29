<?php include("module/conexion.php");
		$connection = connectDatabase();

		$sqlQuery = "SELECT * FROM comentario where id_comentario = ".$_GET['id'].";";
		$result = $connection->query($sqlQuery);
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
		if($row['id_comentario']=='')
		{
			header('Location: ../index.php');
			exit;
		}
		else
		{
			$titulo=$row['titulo'];
			$texto=$row['texto'];
		}
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
	<title>Viewpost</title>
</head>
<body>
<nav class="row padding-largo nav-color text-center">
		<ul class="no-lista"> 
			<li class="col-md-4"></li>
			<li class="col-md-4"><a href="index.php" class="pacifico color">My Blog</a></li>
		</ul>
	</nav>
	<div class="row  text-center">
		<h1 class="color"><span class="pacifico">My Blog</span></h1>
	</div>
	<div id="viewpost" class="">


		<?php	
			echo '<div>';
				echo '<h1 class="color">El titulo :  <span class="pacifico color2">'.$titulo.'</span></h1>';
				echo '<p class="color">Posted on '.date('jS M Y', strtotime($row['fecha'])).'</p>';
				echo '<p>'.$texto.'</p>';				
			echo '</div>';
		?>

	</div>
	
</body>
</html>