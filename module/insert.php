<?php 
	include('conexion.php');
	$connection = connectDatabase();
	session_start();
	$title = $_POST['titulo'];
	$text = $_POST['texto'];
	$date = $_POST['fecha'];

	if (isset($text) && !empty($text) &&
		isset($date) && !empty($date)){
		
		$sqlQuery = "SELECT id_persona FROM personas where userName = '". $_SESSION['user'] ."';";
		$result = $connection->query($sqlQuery);
		$row = $result->fetch_assoc();
		$id = $row['id_persona'];

			$sqlQuery = "INSERT INTO comentario (titulo,texto,fecha,id_persona) VALUES('$title','$text','$date','$id')";
			if ($connection->query($sqlQuery) === TRUE) {
				echo "<br>"."Datos insertados con exito";
				header('Location: ../perfil.php?mensaje=postear');
			}else{
				echo "<br>"."Error: ". $sqlQuery."<br>";
				
			}

	}else{
		echo "<br>"."Error: ". $sqlQuery."<br>";
		header('Location: ../perfil.php?mensaje=nopostear');
	}



 ?>