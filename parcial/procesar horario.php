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
		<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$id_ruta=$_REQUEST["id_ruta"];
$id_bus=$_REQUEST["id_bus"];
$hora_salida=$_REQUEST["hora_salida"];
$hora_llegada=$_REQUEST["hora_llegada"];


$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "INSERT INTO $table (id_ruta, id_bus, hora_llegada, hora_salida) VALUES ('$id_ruta','$id_bus','$hora_llegada','$hora_salida')";
$resultado = $con->query($sql);

if($resultado > 0) {
?>
	<table class="tabla-resultados">
		<thead>
			<tr>	
				<td>ID_Ruta</td>
				<td>ID_Bus</td>
				<td>Hora Llegada</td>
				<td>Hora Salida</td>
		
			</tr>				  
		</thead>
		<tbody>
			<td><?php echo $id_ruta ?></td>
			<td><?php echo $id_bus ?></td>
			<td><?php echo $hora_llegada ?></td>
			<td><?php echo $hora_salida ?></td>
		</tbody>
	</table>
	<div class="mensaje">Datos ingresados correctamente</div>
	<meta http-equiv='refresh' content='1;URL=CGhorario.php?'/>
<?php 
} else {
?>
	<div class="mensaje-error">No se ha podido ingresar los datos <br> 
<?php	
	if($id_ruta === "" || $id_bus ===""){
		echo "No ha seleccionado la ruta o el bus";
	}
?>
</div>
<?php
}
?>
</body>
</html>
