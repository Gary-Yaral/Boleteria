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
	<div class="opciones">
		<a href="formulario bus.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGbus.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buses</h1>
<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos");
$table = "bus"; 
$sql = "select * from $table";
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
				<td>ID</td>
				<td>Chofer</td>
				<td>Placa</td>
				<td>Matrícula</td>
				<td>Capacidad</td>
				<td>Modelo</td> 
				<td>Estado</td> 
				<td>Eliminar</td> 
				<td>Editar</td> 
			</tr>				  
		</thead>
		<tbody>
		
		<?php  
		while ($fila = $resultado->fetch_assoc()){ 
			$id_bus=$fila["id_bus"];	
			$chofer=$fila["chofer"];	
			$placa=$fila["placa"];
			$matricula=$fila["matricula"];
			$capacidad=$fila["capacidad"];
			$modelo=$fila["modelo"];
			$estado=$fila["estado"];
		?>
    		<tr>
				<td><?php echo $id_bus ?></td>
				<td><?php echo $chofer ?></td>
				<td><?php echo $placa ?></td>
				<td><?php echo $matricula ?></td>
				<td><?php echo $capacidad ?></td>
				<td><?php echo $modelo ?></td>
				<td><?php echo $estado ?></td>
				<td>
					<a href='eliminarbus.php?id_bus=<?php echo $id_bus ?>'>
						<img src='imagenes/eliminar.png' width=35>
					</a>
				</td>
				<td>
					<a href='editar.php?id_bus=<?php echo $id_bus ?>'>
						<img src='imagenes/editar.png' width=25>
					</a>
				</td>
	        </tr>
	<?php } ?>
		</tbody>
	</table>
<?php }?>

</body>
</html>