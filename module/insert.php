<?php 
	include('conexion.php');
	$connection = connectDatabase();
	session_start();
	$text = $_POST['texto'];
	$date = $_POST['fecha'];

	if (isset($text) && !empty($text) && 
		isset($date) && !empty($date)) {
		
		$sqlQuery = "SELECT id_persona FROM personas where userName = '". $_SESSION['user'] ."';";
		$result = $connection->query($sqlQuery);
		$row = $result->fetch_assoc();
		$id = $row['id_persona'];

			$sqlQuery = "INSERT INTO comentario (fecha,texto,id_persona) VALUES('$date','$text','$id')";
			if ($connection->query($sqlQuery) === TRUE) {
				echo "<br>"."Datos insertados con exito";
			}else{
				echo "<br>"."Error: ". $sqlQuery."<br>";
				echo "No se pudo registrar";
			}

	}else{
		echo "<br>"."Error: ". $sqlQuery."<br>";
	}



 ?>