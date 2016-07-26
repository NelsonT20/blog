<?php 
include('conexion.php');

$connection = connectDatabase();
	$nick = $_POST['Nickname'];
	$nombre = $_POST['Name'];
	$apellido = $_POST['LastName'];
	$correo = $_POST['Email'];
	$contraseña = $_POST['Password'];
	$contraseñaRepetida = $_POST['RepeatPassword'];

	if (isset($nick) && !empty($nick)  && 
		isset($nombre) && !empty($nombre) &&
		isset($apellido) && !empty($apellido) &&
		isset($correo) && !empty($correo) && 
		isset($contraseña) && !empty($contraseña) &&
		$contraseña == $contraseñaRepetida){
		if ($nick) {
			$sqlQuery = "SELECT id_persona from personas where userName = '". $nick ."';";
			$personaEncontrada = $connection->query($sqlQuery);
			if ($personaEncontrada->num_rows > 0) {
				echo "<br>"."Ese Usuario ya ha sido registrado";
				header('Location: ../crear-usuario.php?mensaje=yaregistrado');
				return $connection->close();
			}else{
				echo "No ha sido registrado aun";
			}
		}//fin del if nick
		if ($correo) {
			$sqlQuery = "SELECT id_persona from personas where email = '". $correo ."';";
			$personaEncontrada = $connection->query($sqlQuery);
			if ($personaEncontrada->num_rows > 0) {
				echo "<br>"."Ese correo ya ha sido registrado";
				header('Location: ../crear-usuario.php?mensaje=yaregistradoemail');
			}else{
				$sqlQuery = "INSERT INTO personas(userName,nombre,apellido,email,password) VALUES('$nick','$nombre','$apellido','$correo','$contraseña')";
					if ($connection->query($sqlQuery) === TRUE) {
						echo "<br>"."Datos insertados con exito";
						header('Location: ../crear-usuario.php?mensaje=registrado');
					}else {
						echo "<br>"."Error: ". $sqlQuery."<br>";
						echo "Los datos que quieres registrar ya han sido registrado";
					}

			}
		}//fin de if correo
	
	}else{ 

		echo "<br>"."las contraseñas no coinciden";
		header('Location: ../crear-usuario.php?mensaje=passsame');
	}


 ?>