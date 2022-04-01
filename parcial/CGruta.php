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
	<h1 class="titulo-resultados" >Rutas</h1>

<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos");
$table = "ruta"; 
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
					<td>N° Ruta</td>
					<td>Origen</td>
					<td>Destino</td>
					<td>Eliminar</td> 
					<td>Editar</td> 
				</tr>				  
			</thead>
			<tbody>
			
			<?php  
			while ($fila = $resultado->fetch_assoc()){ 
		
				$n_ruta=$fila["n_ruta"];
				$origen=$fila["origen"];
				$destino=$fila["destino"];
			?>
				<tr>
					<td><?php echo $n_ruta ?></td>
					<td><?php echo $origen ?></td>
					<td><?php echo $destino ?></td>
					<td>
						<a href='eliminaruta.php?n_ruta=$n_ruta'>
							<img src='imagenes/eliminar.png' width=35>
						</a>
					</td>			
					<td>
						<a href='editar ruta.php?n_ruta=$n_ruta'>
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