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
		<a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar Oficina</h1>

<?php 
$id_oficina=$_REQUEST["id_oficina"];
// por primera vez presionado=0 

//conectar a la bd

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 
$sql = "select * from $table where id_oficina='$id_oficina'";
$resultado = $con->query($sql);
$filas =$resultado->fetch_assoc();

$id_oficina=$filas["id_oficina"];
$nombre=$filas["nombre"];
$direccion=$filas["direccion"];
$telefono=$filas["telefono"];
$correo=$filas["correo"];

?>
	<form class="form-editar" action='MOficina.php' method='post'>

		<input type='hidden' name="id_oficina" value='<?php echo $id_oficina ?>'>
		<div>
			<label for="cedula">Nombre:</label>
			<input type='text' name="nombre" value='<?php echo $nombre ?>'>
		</div>
		<div>
			<label for="cedula">Direción:</label>
			<input type='text' name="direccion" value='<?php echo $direccion ?>'>
		</div>
		<div>
			<label for="cedula">Telefono:</label>
			<input type='text' name="telefono" value='<?php echo $telefono ?>'>
		</div>
		<div>
			<label for="cedula">Correo:</label>
			<input type='text' name="correo" value='<?php echo $correo ?>'>
		</div>
		<section>
			<a class="btn-cancelar" href ="CGoficina.php">Cancelar</a>
			<input type='submit' class="btn-editar">
		</section>

	</form>
</body>
</html>