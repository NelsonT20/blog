<?php 
	session_start();
	include "../module/conexion.php";
	$connection = connectDatabase();

	$nick = $_POST['userName'];
	$pass = $_POST['password'];

	$sqlQuery = "SELECT userName, password FROM personas WHERE userName = '" . $nick . "';";
	$usersFinded = $connection->query($sqlQuery);

	if ($usersFinded->num_rows > 0) {
		while ($row = $usersFinded->fetch_assoc()) {
			if ($row['password'] == $pass) {
				$_SESSION['user'] = $row['userName'];
				$_SESSION['pass'] = $row['password'];
				header('Location: ../index.php');
			} else {
				header('Location: ../login.php?mensaje=errorpass');
			}
		}
	} else {
		header('Location: ../login.php?mensaje=erroruser');
	}

 ?>