<?php 

  $conexion=mysqli_connect('localhost','miusuario','mipassword','test');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Registro</title>
	<link rel="stylesheet" href="css/style4.css">
	<title> Nidix | Administracion de proyectos </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="img/css/fontello.css">
	<link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/keyframes.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/style3.css">
</head>
<body>
	<header>
	<nav class="ham_navbar navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand ham-font-nav" href="#">Nidix Networks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-warning my-2 my-sm-0" href="inicio.html">Página Principal</a>

                <button class="btn btn-danger my-2 my-sm-0" href="../index.html">Cerrar Sesion</button>
    </form>
  </div>
</nav>
</header>
	<form action="insertar.php" class="form-register" method="post" enctype="multiopart/form-data">
		<h1 class="form__title"> Introducir Informe</h1>
		
		<div class="container--flex">
			<label for="" class="form__label"> Titulo </label>
			<input type="text" class="form_input" name="titulo" required>
		</div>
		<div class="container--flex">
			<label for="" class="form__label"> Descripcion </label>
			<input type="text" class="form_input" name="descripcion" required>
		</div>
		<div class="container--flex">
			<label for="" class="form__label"> Fecha </label>
			<input type="date" class="form_input" name="fecha">
		</div>
		<input type="submit">

	</form>

</body>
</html>