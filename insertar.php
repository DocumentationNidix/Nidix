<?php
$conexion =  mysql_connect("localhost","miusuario","mipassword","test");

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

if($_FILES["archivo"]) {
    $nombre_base = basename($_FILES['archivo']["name"]);
    $nombre_final = date("m-d-y")."-".date("H-i-s")."-". $nombre_base;
    $ruta ="archivos/".$nombre_final;
    $subirarchivo = move_uploaded_file($_FILES['archivo']["proyecto_name"], $ruta);
    if($subirarchivo){
        $insertar = "INSERT INTO proyectos(titulo, descripcion, fecha, archivo) VALUES  ´('$titulo','$descripcion', '$fecha', '$ruta' )";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if($resultado){
            echo "<script>alert('se ha enviado su informe'); window.location='tabla1.php'</script>";
            else {
                printf("Errormessage: %sn", mysqli_error($conexion));
            }
        }
    }

} else {
    echo"Error al subir archivo";
}

 ?>