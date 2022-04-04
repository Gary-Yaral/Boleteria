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
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$chofer=$_REQUEST["chofer"];
$placa=$_REQUEST["placa"];
$matricula=$_REQUEST["matricula"];
$capacidad=$_REQUEST["capacidad"];
$modelo=$_REQUEST["modelo"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "bus"; 
$sql = "select * from $table where placa='$placa'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas > 0) {
?>
	<div class="mensaje-error">No es posible agregar este bus</div>
	<div class="mensaje-error">Ya existe un bus con esa placa</div>
	<meta http-equiv='refresh' content='3;URL=CGbus.php?'/>
<?php
}else {
$sql = "insert into $table (chofer, placa, matricula, capacidad, modelo) values ('$chofer','$placa','$matricula','$capacidad','$modelo')";
$resultado = $con->query($sql);

	if($resultado > 0) {
	?>
		<table class="tabla-resultados">
			<thead>
				<tr>	
					<td>Chofer</td>
					<td>Placa</td>
					<td>Matrícula</td>
					<td>Capacidad</td>
					<td>Modelo</td>
				</tr>				  
			</thead>
			<tbody>
				<td><?php echo $chofer ?></td>
				<td><?php echo $placa ?></td>
				<td><?php echo $matricula ?></td>
				<td><?php echo $capacidad ?></td>
				<td><?php echo $modelo ?></td>
			</tbody>
		</table>
		<div class="mensaje">Datos ingresados correctamente</div>
		<meta http-equiv='refresh' content='1;URL=CGbus.php?'/>
	<?php 
	} else {
	?>
		<div class="mensaje-error">No se ha podido ingresar los datos</div>
	<?php
	}
}
?>
</body>

</html>