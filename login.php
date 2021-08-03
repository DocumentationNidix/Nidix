<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usu' and pass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
{
    //header("Location: pagina.html")
    echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
    //header("Location: login.html");
    //echo "No ingreso"; 
    echo "<script> alert('Error');window.location= 'login.html' </script>";
}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}

?>
