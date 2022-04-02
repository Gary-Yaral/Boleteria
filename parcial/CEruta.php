<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buses</title>

	<link rel="stylesheet" href="css/results.css">
</head>
<body>
	<div class="opciones">
		<a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
	</div>

	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Resultados:</h1>

<?php
	$id_ruta=$_REQUEST["id_ruta"];

	//conectar a la bd
	$con = mysqli_connect("localhost","root","","boletos");
	$table = "ruta"; 
	$sql = "select * from $table where id_ruta='$id_ruta'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);

	if($filas === 0){
?>
		<h3 class="No-resultado">No existen datos</h3>
<?php
	} else {
?>

	<table class="tabla-resultados">
		<thead>
			<tr>	
				<td>ID Ruta</td>
				<td>N° Ruta</td> 
				<td>Origen</td>
				<td>Destino</td>
				<td>Valor</td>
			</tr>				  
		</thead>
		<tbody>
		<?php  while ($fila = $resultado->fetch_assoc()){ ?>
    		<tr>

			<?php
				$id_ruta=$fila["id_ruta"];
				$n_ruta=$fila["n_ruta"];
				$origen=$fila["origen"];
				$destino=$fila["destino"];
				$valor=$fila["valor"];
		   	 	 
			?>
			<td><?php echo $id_ruta ?></td>
			<td><?php echo $n_ruta ?></td>
			<td><?php echo $origen ?></td>
			<td><?php echo $destino ?></td>
			<td><?php echo $valor ?></td>
			
			</tr>
		<?php 
		}
		?>
		</tbody>
	</table>
	<?php
	}
	?>
</body>

</html>
