<?php 
	include('conexion.php');
	$connection = connectDatabase();
	session_start();

	$show = $_POST['show'];


		$sqlQuery = "SELECT id_persona FROM personas where userName = '". $_SESSION['user'] ."';";
		$result = $connection->query($sqlQuery);
		$row = $result->fetch_assoc();
		$id = $row['id_persona'];
		echo "<br>".$id;

		$sqlQuery = "SELECT texto FROM comentario where id_persona = '". $id . "';";
			if ($connection->query($sqlQuery) === TRUE) {
				echo "<br>"."FUNCIONO";
				echo "texto";
			}else{
				echo "<br>"."Error: ". $sqlQuery."<br>";
				
			}



 ?>