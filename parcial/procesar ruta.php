
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
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$n_ruta=$_REQUEST["n_ruta"];
$origen = $_REQUEST["origen"];
$destino=$_REQUEST["destino"];
$valor=$_REQUEST["valor"];
$tiempo_espera=$_REQUEST["tiempo_espera"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "ruta"; 

$sql = "select * from $table where n_ruta='$n_ruta'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas > 0) {
	?>
		<div class="mensaje-error">No es posible agregar esta Ruta</div>
		<div class="mensaje-error">Ya existe una ruta con el número: <?php echo $n_ruta?></div>
		<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
	<?php
	
} else {

	$sql = "select * from $table where origen = '$origen' and destino = '$destino'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);

	if($filas > 0) {
?>
		<div class="mensaje-error">No es posible agregar esta ruta</div>
		<div class="mensaje-error">Ya existe una ruta: ( <?php echo $origen.' - '.$destino?> )</div>
		<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
<?php

	} else {

		$sql = "INSERT INTO $table (n_ruta, origen, destino, valor, tiempo_espera) VALUES ('$n_ruta','$origen','$destino','$valor', '$tiempo_espera')";
		$resultado = $con->query($sql);

		if($resultado > 0) {
	?>
		<table class="tabla-resultados">
			<thead>
				<tr>	
					<td>N° Ruta</td>
					<td>Origen</td>
					<td>Destino</td>
					<td>Valor</td>
				</tr>				  
			</thead>
			<tbody>
				<td><?php echo $n_ruta ?></td>
				<td><?php echo $origen ?></td>
				<td><?php echo $destino ?></td>
				<td><?php echo $valor ?></td>
			</tbody>
		</table>
		<div class="mensaje">Datos ingresados correctamente</div>
		<meta http-equiv='refresh' content='1;URL=CGruta.php?'/>
		<?php 
		} else {
		?>
			<div class="mensaje-error">No se ha podido ingresar los datos</div>
		<?php
		}
	}
}

?>
</body>
</html>
