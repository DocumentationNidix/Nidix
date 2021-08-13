<?php
$conexion =  mysql_connect("localhost","miusuario","mipassword","test");

include("insertar.php")

$nombre = $_POST['titulo'];
$nombre = $_POST['descripcion'];
$nombre = $_POST['fecha'];

 // Insertar datos

$query= "INSERT INTO proyectos(Titulo,Descripcion, Fecha) VALUES 
('$Titulo','$Descripcion','$Fecha')";


 ?>