 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
	<div class="container">
	<header>
		<h1>Cuestionario de Electricidad</h1>
	<nav></nav></header>
	<section>




	


</section>
<section>
<form action="componentes/cargarR.php" id="cuestionario" method="POST">
<label><h4>Que es un interruptor diferencial (disyuntor)?</h4></label><br>
<input type="radio" name="opcion1" value="Dispositivo de emergencia">Dispositivo de emergencia <br>
<input type="radio" name="opcion1" value="Dispositivo de proteccion">Dispositivo de protección <br>
<input type="radio" name="opcion1" value="Dispositivo de ayuda"> Dispositivo de ayuda <br>

<label><h4>Por que se acciona (salta) un interruptor termomagnetico (termica) ?</h4></label><br>
<input type="radio" name="opcion2" value="Por sobrecarga y cortocircuito"> Por sobrecarga y cortocircuito <br>
<input type="radio" name="opcion2" value="Por calor y humedad "> Por calor y humedad <br>
<input type="radio" name="opcion2" value="Por organización de la instalación"> Por organización de la instalación <br>

<label><h4>Cómo está formado el sistema de puesta a tierra?</h4></label><br>
<input type="radio" name="opcion3" value="Jabalina, cable de protección, caja de inspección"> Jabalina, cable de protección, caja de inspección <br>
<input type="radio" name="opcion3" value="Por tierra fértil"> Por tierra fértil <br>
<input type="radio" name="opcion3" value="Por cable verde/amarillo"> Por cable verde/amarillo <br>
 <div>
	<h2>      
		   </h2>
<input type="submit" value="Enviar" > <br>
</form>


 <?php 
 if(isset($_GET['ok'])) {
	echo "<p> Las respuestas fueron enviadas con exito</p>";
}
 ?>
 	</div>
	

	</section>
</body>
</html>