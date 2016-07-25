	if ($contraseña == $contraseñaRepetida) {
			$sqlQuery = "SELECT id_persona FROM personas WHERE email = '" . $correo . "';";
			$personaEncontrada = $connection->query($sqlQuery);
		
		// check if the person is exist in the DB
		if ($personaEncontrada->num_rows == 0) {
			$sqlQuery = "SELECT email FROM personas WHERE email = '" . $correo . "';";
			$emailEncontrado = $connection->query($sqlQuery);
			// check if the email exist in the database
			if ($emailEncontrado->num_rows == 0) {
				$sqlQuery = "INSERT INTO personas VALUES (DEFAULT, '". $nick . "', '" . $nombre . "', '" . $apellido . "', '" . $correo . "', '" . $contraseña . "');";
				// check if the register of the person succeded
				header('Location: ../registro_usuario.php?mensaje=registrado');

		}else {

				header('Location: ../registro_usuario.php?mensaje=yaregistrado');
			}
		}
	} else {
		header('Location: ../registro_usuario.php?mensaje=passsame');
	}