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
		<a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Resultado:</h1>

<?php
$id_horario=$_REQUEST["id_horario"];
$n_boleto=$_REQUEST["n_boleto"];
$fecha=$_REQUEST["fecha"];

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "boleto"; 
$sql = "select * from $table where id_horario='$id_horario' and num_boleto='$n_boleto' and fecha='$fecha'";
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
				<td>Ruta</td>
				<td>N° boleto</td>
				<td>Ced. Cliente</td>
				<td>Valor</td>
				<td>N° Asiento</td>
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

		while ($filas = $resultado->fetch_assoc()){ 
	
			$num_boleto=$filas["num_boleto"];  
			$fecha=$filas["fecha"];
			$valor=$filas["valor"];
			$n_asiento=$filas["n_asiento"];
			$id_boleto=$filas["id_boleto"];
			$id_cliente=$filas["id_cliente"];

			$table = "horario"; 
			$sql = "select * from $table where id_horario='$id_horario'";
			$resultado3 = $con->query($sql);
			$resultado3 = $resultado3->fetch_assoc();

			$id_ruta = $resultado3['id_ruta'];
			$table2 = "ruta"; 
			$sql2 = "select * from $table2 where id_ruta='$id_ruta'";
			$resultado4 = $con->query($sql2);
			$resultado4 = $resultado4->fetch_assoc();

			$origen = $resultado4['origen'];
			$destino = $resultado4['destino'];

		?>
		<tr>
			<td><?php echo $id_boleto ?></td>  
			<td><?php echo $fecha ?></td>
			<td><?php echo $origen.' - '.$destino ?></td>
			<td><?php echo $num_boleto ?></td>
			<td><?php echo $cliente[$id_cliente] ?></td>
			<td><?php echo '$'.$valor ?></td>
			<td><?php echo $n_asiento ?></td>  
		</tr>
<?php } ?>
	</tbody>
</table>
<?php 
}
?>

</body>

</html>