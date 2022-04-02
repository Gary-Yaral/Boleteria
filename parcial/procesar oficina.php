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
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$nombre=$_REQUEST["nombre"];
$direccion=$_REQUEST["direccion"];
$telefono=$_REQUEST["telefono"];
$correo=$_REQUEST["correo"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 
$sql = "INSERT INTO $table (nombre, direccion, telefono, correo) VALUES ('$nombre','$direccion','$telefono','$correo')";
$resultado = $con->query($sql);

if($resultado > 0) {
?>
	<table class="tabla-resultados">
		<thead>
			<tr>	
				<td>Nombre</td>
				<td>Dirección</td>
				<td>Teléfono</td>
				<td>Correo</td>
			</tr>				  
		</thead>
		<tbody>
			<td><?php echo $nombre ?></td>
			<td><?php echo $direccion ?></td>
			<td><?php echo $telefono ?></td>
			<td><?php echo $correo ?></td>
		</tbody>
	</table>
	<div class="mensaje">Datos ingresados correctamente</div>
	<meta http-equiv='refresh' content='1;URL=CGoficina.php?'/>
<?php 
} else {
?>
	<div class="mensaje-error">No se ha podido ingresar los datos</div>
<?php
}
?>
</body>
</html>
