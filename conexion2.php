<?php
$conn = new mysqli("localhost","miusuario","mipassword","test");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>