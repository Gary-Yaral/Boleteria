<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/results.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<body>
	<div class="opciones">
		<a href="formulario bus.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGbus.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar Bus</h1>

<?php 
$id_bus=$_REQUEST["id_bus"];
// por primera vez presionado=0 

//conectar a la bd

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "bus"; 
$sql = "select * from $table where id_bus='$id_bus'";
$resultado = $con->query($sql);
$filas =$resultado->fetch_assoc();

$id_bus=$filas["id_bus"];
$chofer=$filas["chofer"];
$placa=$filas["placa"];
$matricula=$filas["matricula"];
$capacidad=$filas["capacidad"];
$modelo=$filas["modelo"];
$estado=$filas["estado"];
?>
	<form class="form-editar" action='MBus.php' method='post'>

		<input type='hidden' name="id_bus" value='<?php echo $id_bus ?>'>
		<div>
			<label for="cedula">Chofer:</label>
			<input type='text' name="chofer" value='<?php echo $chofer ?>'>
		</div>
		<div>
			<label for="cedula">Placa:</label>
			<input type='text' name="placa" value='<?php echo $placa ?>'>
		</div>
		<div>
			<label for="cedula">Matrìcula:</label>
			<input type='text' name="matricula" value='<?php echo $matricula ?>'>
		</div>
		<div>
			<label for="cedula">Capacidad:</label>
			<input type='text' name="capacidad" value='<?php echo $capacidad ?>'>
		</div>
		<div>
			<label for="cedula">Modelo:</label>
			<input type='text' name="modelo" value='<?php echo $modelo ?>'>
		</div>
		<div>
			<label for="cedula">Estado:</label>
			<input type='text' name="estado" value='<?php echo $estado ?>'>
		</div>
		<section>
			<input type='reset' value=Limpiar>
			<input type='submit'>
		</section>

	</form>
</body>
</html>