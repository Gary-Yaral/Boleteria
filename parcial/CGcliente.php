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
		<a class="btn-option" href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
		<a class="btn-option" href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
		<a class="btn-option" href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Clientes</h1>

<?php

	//conectar a la bd
	$con = mysqli_connect("localhost","root","","boletos");
	$table = "cliente"; 
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
					<td>Cédula</td>
					<td>Nombres</td>
					<td>Apellidos</td>
					<td>Teléfono</td>
					<td>Drección</td> 
					<td>Correo</td> 
					<td>Eliminar</td> 
					<td>Editar</td> 
				</tr>				  
			</thead>
			<tbody>
			
			<?php  
			while ($fila = $resultado->fetch_assoc()){ 
				$cedula=$fila["cedula"];
				$nombres=$fila["nombres"];
				$apellidos=$fila["apellidos"];
				$telefono=$fila["telefono"];
				$direccion=$fila["direccion"];
				$correo=$fila["correo"];

			?>
				<tr>
					<td><?php echo $cedula ?></td>
					<td><?php echo $nombres ?></td>
					<td><?php echo $apellidos ?></td>
					<td><?php echo $telefono ?></td>
					<td><?php echo $direccion ?></td>
					<td><?php echo $correo ?></td>
					<td>
						<a href='eliminarcliente.php?cedula=$cedula'>
							<img src='imagenes/eliminar.png' width=35>
						</a>
					</td>
					<td>
						<a href='editar cliente.php?cedula=$cedula'>
							<img src='imagenes/editar.png' width=25>
						</a>
					</td>
				</tr>
		<?php } ?>
			</tbody>
		</table>
	<?php } ?>

	</body>

</html>