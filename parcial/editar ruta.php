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
		<a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar Ruta</h1>

<?php 
$id_ruta=$_REQUEST["id_ruta"];
// por primera vez presionado=0 

//conectar a la bd

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "ruta"; 
$sql = "select * from $table where id_ruta='$id_ruta'";
$resultado = $con->query($sql);
$filas =$resultado->fetch_assoc();

$n_ruta=$filas["n_ruta"];
$origen=$filas["origen"];
$destino=$filas["destino"];
$valor=$filas["valor"];


?>
	<form class="form-editar" action='MRuta.php' method='post'>

		<input type='hidden' name="id_ruta" value='<?php echo $id_ruta ?>'>
		<div>
			<label for="cedula">Nº Ruta:</label>
			<input type='number' name="n_ruta" value='<?php echo $n_ruta ?>'>
		</div>
		<div>
			<label for="cedula">Origen:</label>
			<input type='text' name="origen" value='<?php echo $origen ?>'>
		</div>
		<div>
			<label for="cedula">Destino:</label>
			<input type='text' name="destino" value='<?php echo $destino ?>'>
		</div>
		<div>
			<label for="cedula">Valor:</label>
			<input step="any" type='number' name="valor" value='<?php echo $valor ?>'>
		</div>
		<section>
			<a class="btn-cancelar" href ="CGbus.php">Cancelar</a>
			<input type='submit' class="btn-editar" value="Editar" >
		</section>

	</form>
</body>
</html>