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
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
$id_ruta=$_REQUEST["id_ruta"];
$n_ruta=$_REQUEST["n_ruta"];
$n_ruta_antigua=$_REQUEST["n_ruta_antigua"];
$origen=$_REQUEST["origen"];
$destino=$_REQUEST["destino"];
$valor=$_REQUEST["valor"];
$tiempo_espera=$_REQUEST["tiempo_espera"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "ruta"; 

if($n_ruta == $n_ruta_antigua) {
	//Tengo el mismo numero de ruta
	$sql = "select * from $table where origen = '$origen' and destino = '$destino'";
	$resultado = $con->query($sql);
	$data = $resultado->fetch_assoc();
	$filas = mysqli_num_rows($resultado);
	$data = $data['n_ruta'];

	// Yo tengo el mismo origen y destino
	if($data == $n_ruta_antigua) {

		$sql = "UPDATE $table SET n_ruta ='$n_ruta', origen= '$origen', destino='$destino', valor ='$valor', tiempo_espera='$tiempo_espera' WHERE id_ruta='$id_ruta'";
		$resultado = $con->query($sql);
		if($resultado == 1) {
		?>  
			<h3 class="titulo-eliminar">Resultado</h3>
			<section class="mensaje-eliminar">Ruta editada</section>
			<meta http-equiv='refresh' content='1;URL=CGruta.php?'/> 
		<?php
		} else {
		?>
			<div class="mensaje-error">Resultado</div>
			<div class="mensaje-error">No es posible editar la ruta</div>
			<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
		<?php
		}
	}

	// No tengo el mismo origen y destino
	if($data != $n_ruta_antigua ) {
		// Nadie tiene asignado ese origen y destino
		if($data == "") {

			$sql = "UPDATE $table SET origen= '$origen', destino='$destino', valor ='$valor', tiempo_espera='$tiempo_espera' WHERE id_ruta='$id_ruta'";
			$resultado = $con->query($sql);
			if($resultado == 1) {
			?>  
				<h3 class="titulo-eliminar">Resultado</h3>
				<section class="mensaje-eliminar">Ruta editada</section>
				<meta http-equiv='refresh' content='1;URL=CGruta.php?'/> 
			<?php
			} else {
			?>
				<div>No se ha podido editar ruta</div>
			<?php
			}
		}

		if($data != "") {
		?>
			<div class="mensaje-error">No es posible agregar esta ruta</div>
			<div class="mensaje-error">Ya existe una ruta: ( <?php echo $origen.' - '.$destino?> )</div>
			<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
		<?php

		}
	}

} else {
	// No tengo el mismo numero de ruta
	$sql = "select * from $table where n_ruta='$n_ruta'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);

	//Verifico si existe una ruta con ese numero
	if($filas > 0) {
		// Existe ese numero de ruta
		?>
			<div class="mensaje-error">No es posible editar esta Ruta</div>
			<div class="mensaje-error">Ya existe una ruta con el número: <?php echo $n_ruta?></div>
			<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
		<?php
		
	} else {
		//No existe ese numero de ruta
		$sql = "select * from $table where origen = '$origen' and destino = '$destino'";
		$resultado = $con->query($sql);
		$filas = mysqli_num_rows($resultado); 
		$data = $resultado->fetch_assoc();
	
	
		// Si existe ese origen y destino
		if($filas > 0) {
			// Yo tengo ese origen y destino
			if($data['n_ruta'] == $n_ruta_antigua) {
				$sql = "UPDATE $table SET id_ruta ='$id_ruta', n_ruta ='$n_ruta', origen= '$origen', destino='$destino', valor ='$valor', tiempo_espera='$tiempo_espera' WHERE id_ruta='$id_ruta'";
				$resultado = $con->query($sql);
				if($resultado == 1) {
				?>  
					<h3 class="titulo-eliminar">Resultado</h3>
					<section class="mensaje-eliminar">Ruta editada</section>
					<meta http-equiv='refresh' content='1;URL=CGruta.php?'/>
				<?php
				} else {
				?>
					<div>No se ha podido editar ruta</div>
				<?php
				} 
			} 

			// No tengo ese origen y destino
			if($data['n_ruta'] != $n_ruta_antigua) {
				//Nadie lo tiene
				if($data['n_ruta'] == "") {
					$sql = "UPDATE $table SET id_ruta ='$id_ruta', n_ruta ='$n_ruta', origen= '$origen', destino='$destino', valor ='$valor', tiempo_espera='$tiempo_espera' WHERE id_ruta='$id_ruta'";
					$resultado = $con->query($sql);
					if($resultado == 1) {
					?>  
						<h3 class="titulo-eliminar">Resultado</h3>
						<section class="mensaje-eliminar">Ruta editada</section>
						<meta http-equiv='refresh' content='1;URL=CGruta.php?'/>
					<?php
					} else {
					?>
						<div class="mensaje-error">No es posible editar esta ruta</div>
						<div class="mensaje-error">Ya existe una ruta: ( <?php echo $origen.' - '.$destino?> )</div>
						<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
					<?php
					}
				}

				// Alguien lo tiene
				if($data['n_ruta'] != "")  {
					?>
						<div class="mensaje-error">No es posible editar esta ruta</div>
						<div class="mensaje-error">Ya existe una ruta: ( <?php echo $origen.' - '.$destino?> )</div>
						<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
					<?php
				}
			} 
		} else {

			// No existe el origen y destino todavia
			$sql = "UPDATE $table SET id_ruta ='$id_ruta', n_ruta ='$n_ruta', origen= '$origen', destino='$destino', valor ='$valor', tiempo_espera='$tiempo_espera' WHERE id_ruta='$id_ruta'";
			$resultado = $con->query($sql);
			if($resultado == 1) {
			?>  
				<h3 class="titulo-eliminar">Resultado</h3>
				<section class="mensaje-eliminar">Ruta editada</section>
				<meta http-equiv='refresh' content='1;URL=CGruta.php?'/>
			<?php
			} else {
			?>
				<div class="mensaje-error">No es posible editar esta ruta</div>
				<div class="mensaje-error">Ya existe una ruta: ( <?php echo $origen.' - '.$destino?> )</div>
				<meta http-equiv='refresh' content='5;URL=CGruta.php?'/>
			<?php
			}
		}
	}
}
?>			
		
</body>
</html>