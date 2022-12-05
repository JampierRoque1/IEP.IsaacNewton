<?php

	$nombres = $_POST['nombres'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registro";
	 // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection fallida: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO usuarios (nombres, correo, mensaje) VALUES ('$nombres', '$correo', '$mensaje')";
	if ($conn->query($sql) === TRUE) {
	    echo "se registro correctamente <br> <a href='index.html'>volver</a>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

?>


