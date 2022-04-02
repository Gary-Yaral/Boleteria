<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head><!DOCTYPE html>
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
		<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Horarios</h1>

<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas === 0){
	?>
		<h3 class="No-resultado">No existen datos</h3>";
	<?php
	} else {	
	?>
		<table class="tabla-resultados">
			<thead>
				<tr>	
					<td>ID Horario</td>
					<td>Hora Llegada</td>
					<td>Hora Salida</td>
					<td>Nº Bus</td>
					<td>Eliminar</td> 
					<td>Editar</td> 
				</tr>				  
			</thead>
			<tbody>
			
			<?php  
			while ($fila = $resultado->fetch_assoc()){ 
				$id_horario=$fila["id_horario"];
				$horallegada=$fila["hora_llegada"];
				$horasalida=$fila["hora_salida"];
				$id_bus=$fila["id_bus"];
			
			?>
			<tr>
				<td><?php echo $id_horario ?></td>
				<td><?php echo $horallegada ?></td>
				<td><?php echo $horasalida ?></td>		
				<td><?php echo $id_bus ?></td>		
				<td>
					<a href='eliminar horario.php?horallegada=$horallegada'>
						<img src='imagenes/eliminar.png' width=35>
					</a>
				</td>
				<td>
					<a href='editar horario.php?horallegada=$horallegada'>
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