<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usu' and pass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
{
    echo "<script> alert('Bienvenido.')</script>";
    header("Location: Nidix/inicio.html");
}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}

?>
