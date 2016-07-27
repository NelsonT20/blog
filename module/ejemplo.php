	<?php 
		include('conexion.php');
		$connection = connectDatabase();
		session_start();
		$sqlQuery = "SELECT id_persona,nombre FROM personas WHERE userName = '" . $_SESSION['user'] . "';";
		$result= $connection->query($sqlQuery);
		$numero = 0;

		if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["id_persona"]. "<br>";
			        echo $row['id_persona'] * 6 ;
			        $sqlQuery = "INSERT INTO blog(id_persona) VALUES('$row[id_persona]')";
			    }
			} else {
			    echo "0 results";
			}



	 ?>

