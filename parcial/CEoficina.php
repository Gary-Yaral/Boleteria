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
		<a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
	</div>

	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Resultados:</h1>

<?php
	$id_oficina=$_REQUEST["id_oficina"];

	//conectar a la bd
	$con = mysqli_connect("localhost","root","","boletos");
	$table = "oficina"; 
	$sql = "select * from $table where id_oficina='$id_oficina'";
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
				<td>Nombre</td>
				<td>Direción</td>
				<td>Teléfono</td>
				<td>Correo</td> 
			</tr>				  
		</thead>
		<tbody>
		<?php  while ($fila = $resultado->fetch_assoc()){ ?>
    		<tr>

			<?php
				$id_oficina=$fila["id_oficina"];
				$nombre=$fila["nombre"];
				$telefono=$fila["telefono"];
				$direccion=$fila["direccion"];
				$correo=$fila["correo"];		   	 	 
			?>
			<td><?php echo $nombre ?></td>
			<td><?php echo $telefono ?></td>
			<td><?php echo $direccion ?></td>
			<td><?php echo $correo ?></td>
			
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
