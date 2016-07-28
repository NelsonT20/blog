<?php include("module/conexion.php");
		$connection = connectDatabase();

		$sqlQuery = "SELECT * FROM comentario where id_comentario = :id_comentario";
		$result = $connection->query($sqlQuery);
		$result->execute(array(':id_comentario' => $_GET['id']));
		$row = $sqlQuery->fetch();

		if($row['id_comentario'] == ''){
			header('Location: ../index.php');
			exit;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Viewpost</title>
</head>
<body>
	<div id="viewpost" class="">
		
		<h1 class="color pacifico">My Blog</h1>
		<hr />
		<p><a href="./">Blog Index</a></p>

		<?php	
			echo '<div>';
				echo '<h1>'.$row['title'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['fecha'])).'</p>';
				echo '<p>'.$row['texto'].'</p>';				
			echo '</div>';
		?>

	</div>
	
</body>
</html>