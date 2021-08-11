<?php 

  $conexion=mysqli_connect('localhost','miusuario','mipassword','test');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Nidix | Administracion de proyectos </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="img/css/fontello.css">
	<link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/keyframes.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/favicon.ico"/>

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
         <button class="btn btn-success my-2 my-sm-0" href="../index.html">Proyecto Nuevo</button>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-warning my-2 my-sm-0" href="inicio.html">Página Principal</a>

                <button class="btn btn-danger my-2 my-sm-0" href="../index.html">Cerrar Sesion</button>
    </form>
  </div>
</nav>
</header>

<section>
  <div class="tablaproyectos">
    <tr>
      <td>Fecha</td>
      <td>Titulo</td>
      <td>Descripcion</td>
    </tr>

    <?php 
    $sql="SELECT * from proyectos";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
      <td><?php echo $mostrar['fecha'] ?></td>
      <td><?php echo $mostrar['titulo'] ?></td>
      <td><?php echo $mostrar['descripcion'] ?></td>
    </tr>
  <?php 
  }
   ?>
  </div>
</section>

<footer class="ham_cont_footer fixed-">
  <div>
    <p class="text-center">&copy; 2020 <a href="#" class="text-white">Ham-School</a>. All Rights Reserved.<a class="text-white"></a></p>
  </div>
</footer>

<script src="ext/bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="ext/bootstrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>