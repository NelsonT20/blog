<?php 
	include('conexion.php');
	$connection = connectDatabase();
	session_start();
	$text = $_POST['Text'];
	$date = $_POST['Fecha'];

	$sqlQuery = "SELECT id_persona FROM personas WHERE userName = '" . $_SESSION['user'] . "';";
	$result= $connection->query($sqlQuery);
		$numero = 0;

		if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo " id: " . $row["id_persona"]. "<br>";
			        echo $row['id_persona'] * 6 ;
			        $sqlQuery = "INSERT INTO comentario(id_persona) VALUES('$row[id_persona]')";
			        echo "<br>"."Funciono";
			    }
			} else {
			    echo "0 results";
			}




 ?>