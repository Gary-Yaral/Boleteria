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
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$cedula=$_REQUEST["cedula"];
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$telefono=$_REQUEST["telefono"];
$direccion=$_REQUEST["direccion"];
$correo=$_REQUEST["correo"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "cliente"; 
$sql = "insert into $table (cedula, nombres, apellidos, telefono, direccion, correo) values ('$cedula','$nombres','$apellidos','$telefono','$direccion','$correo')";
$resultado = $con->query($sql);

if($resultado > 0) {
?>
	<table class="tabla-resultados">
		<thead>
			<tr>	
				<td>Cédula</td>
				<td>Nombres</td>
				<td>Apellidos</td>
				<td>Teléfono</td>
				<td>Direción</td>
				<td>Correo</td>
			</tr>				  
		</thead>
		<tbody>
			<td><?php echo $cedula ?></td>
			<td><?php echo $nombres ?></td>
			<td><?php echo $apellidos ?></td>
			<td><?php echo $telefono ?></td>
			<td><?php echo $direccion ?></td>
			<td><?php echo $correo ?></td>
		</tbody>
	</table>
	<div class="mensaje">Datos ingresados correctamente</div>
	<meta http-equiv='refresh' content='1;URL=CGcliente.php?'/>
<?php 
} else {
?>
	<div class="mensaje-error">No se ha podido ingresar los datos</div>
<?php
}
?>
</body>
</html>