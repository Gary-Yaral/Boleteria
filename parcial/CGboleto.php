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
		<a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Boletos</h1>
<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos");
$table = "boleto"; 
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
					<td>ID boleto</td>
					<td>Fecha</td>
					<td>N° boleto</td>
					<td>Ced. Cliente</td>
					<td>Valor</td>
					<td>N° Asiento</td>
					<td>Eliminar</td> 
					<td>Editar</td> 
				</tr>				  
			</thead>
			<tbody>
			
			<?php  

			$table = "cliente"; 
			$sql = "select * from $table";
			$resultado1 = $con->query($sql);
			$cliente = array();
			while ($fila = $resultado1->fetch_assoc()){
				$cliente[$fila["id_cliente"]] = $fila['cedula'];
			}

			while ($fila = $resultado->fetch_assoc()){ 
       
				$num_boleto=$fila["num_boleto"];  
				$fecha=$fila["fecha"];
				$valor=$fila["valor"];
				$n_asiento=$fila["n_asiento"];
				$id_boleto=$fila["id_boleto"];
				$id_cliente=$fila["id_cliente"];

				

			?>
			<tr>
				<td><?php echo $id_boleto ?></td>  
				<td><?php echo $fecha ?></td>
				<td><?php echo $num_boleto ?></td>
				<td><?php echo $cliente[$id_cliente] ?></td>
				<td><?php echo $valor ?></td>
				<td><?php echo $n_asiento ?></td>  
				<td>
					<a href="eliminarboleto.php?id_boleto=<?php echo  $id_boleto ?>">
						<img src='imagenes/eliminar.png' width=35>
					</a>
				</td>
				<td>
					<a href='editar boleto.php?id_boleto=<?php echo $id_boleto ?>&id_cliente=<?php echo $id_cliente ?>'>
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