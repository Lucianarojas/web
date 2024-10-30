<?php
$opcion = isset($_POST['opcion1']) ? $_POST['opcion1']: null;
$opc = isset($_POST['opcion2']) ? $_POST['opcion2']: null;
$op = isset($_POST['opcion3']) ? $_POST['opcion3']: null;

 $conexion = mysqli_connect('localhost', 'root', '', 'phpelectricidad' ) or exit('no se pudo conectar a la base de datos');

 mysqli_query($conexion, "INSERT INTO respuesta1(respuesta) VALUES ('$opcion')");
 mysqli_query($conexion, "INSERT INTO respuesta2(respuesta) VALUES ('$opc')" );
 mysqli_query($conexion, "INSERT INTO respuesta3(respuesta) VALUES ('$op')");

header("Location: http://localhost/electricidad/base_electricidad/?ok");
?>