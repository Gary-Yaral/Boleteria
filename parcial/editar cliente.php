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
		<a href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar Cliente</h1>

<?php 
$id_cliente=$_REQUEST["id_cliente"];
// por primera vez presionado=0 

//conectar a la bd

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "cliente"; 
$sql = "select * from $table where id_cliente='$id_cliente'";
$resultado = $con->query($sql);
$filas =$resultado->fetch_assoc();

$cedula=$filas["cedula"];
$nombres=$filas["nombres"];
$apellidos=$filas["apellidos"];
$telefono=$filas["telefono"];
$direccion=$filas["direccion"];
$correo=$filas["correo"];

?>
	<form class="form-editar" action='MCliente.php' method='post'>

		<input type='hidden' name="id_cliente" value='<?php echo $id_cliente ?>'>
		<div>
			<label for="cedula">Cédula:</label>
			<input type='text' name="cedula" value='<?php echo $cedula ?>'>
		</div>
		<div>
			<label for="cedula">Nombres:</label>
			<input type='text' name="nombres" value='<?php echo $nombres ?>'>
		</div>
		<div>
			<label for="cedula">Apellidos:</label>
			<input type='text' name="apellidos" value='<?php echo $apellidos ?>'>
		</div>
		<div>
			<label for="cedula">Teléfono:</label>
			<input type='text' name="telefono" value='<?php echo $telefono ?>'>
		</div>
		<div>
			<label for="cedula">Dirección:</label>
			<input type='text' name="direccion" value='<?php echo $direccion ?>'>
		</div>
		<div>
			<label for="cedula">Correo:</label>
			<input type='text' name="correo" value='<?php echo $correo ?>'>
		</div>
		<section>
			<a class="btn-cancelar" href ="CGcliente.php">Cancelar</a>
			<input type='submit' class="btn-editar" value="Editar">
		</section>

	</form>
</body>
</html>