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
		<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>

	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Resultados:</h1>

<?php
	$id_horario=$_REQUEST["id_horario"];

	//conectar a la bd
	$con = mysqli_connect("localhost","root","","boletos");
	$table = "horario"; 
	$sql = "select * from $table where id_horario='$id_horario'";
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
				<td>ID Horario</td>
				<td>Ruta</td>
				<td>N° Bus</td>
				<td>Hora Salida</td> 
			</tr>				  
		</thead>
		<tbody>
		<?php  while ($fila = $resultado->fetch_assoc()){ ?>
    		<tr>

			<?php
				$id_horario=$fila["id_horario"];
				$id_ruta=$fila["id_ruta"];
				$id_bus=$fila["id_bus"];
				$hora_salida=$fila["hora_salida"];
				
				$table = "ruta"; 
				$sql = "select * from $table where id_ruta='$id_ruta'";
				$resultado = $con->query($sql);
				$m = $resultado->fetch_assoc()
			?>
			<td><?php echo $id_horario ?></td>
			<td><?php echo $m['origen'].' - '.$m['destino'] ?></td>
			<td><?php echo $id_bus ?></td>
			<td><?php echo $hora_salida ?></td>
			
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
