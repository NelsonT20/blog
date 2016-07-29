<?php 
	include('conexion.php');
	$connection = connectDatabase();
	session_start();

	$viejapass = $_POST['oldpass'];
	$nuevapass = $_POST['newpass'];
	$repeatpass = $_POST['repass'];

			$sqlQuery = "SELECT password FROM personas WHERE userName = '". $_SESSION['user'] ."';";
			$result = $connection->query($sqlQuery);
			$row = $result->fetch_assoc();
			$id = $row['password'];
			if (isset($viejapass) && !empty($viejapass) &&
			  	isset($nuevapass) && !empty($nuevapass) &&
			  	isset($repeatpass) && !empty($repeatpass) &&
			  	$nuevapass == $repeatpass ) {
					
				if ($viejapass == $id) {
					$sqlQuery = "UPDATE personas SET password = '$nuevapass' WHERE userName = '" . $_SESSION['user'] ."';";
					if ($connection->query($sqlQuery) === TRUE) {
						echo "datos insertados <br>";

						header('Location: ../perfil.php?mensaje=cambiolisto');
					}else{
						echo "<br> errores";
					}
				}else{
					echo "<br>"."Error: ". $sqlQuery."<br>";
					header('Location: ../perfil.php?mensaje=errorpasvieja');
					echo "La contraseña actual no coinciden";
				}
			}else{
					echo "<br>"."Error: ". $sqlQuery."<br>";
					header('Location: ../perfil.php?mensaje=errorpasnueva');
					echo "Las contraseñas nuevas no coinciden";
			}





 ?>