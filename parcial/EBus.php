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
    <a href="formulario bus.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGbus.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
$id_bus=$_REQUEST["id_bus"];
$chofer=$_REQUEST["chofer"];
$placa=$_REQUEST["placa"];
$placa_antigua=$_REQUEST["placa_antigua"];
$matricula=$_REQUEST["matricula"];
$capacidad=$_REQUEST["capacidad"];
$modelo=$_REQUEST["modelo"];
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "bus"; 

if($placa == $placa_antigua) {

	// Se envio la misma placa
	$sql = "UPDATE $table SET chofer ='$chofer', matricula = '$matricula', capacidad='$capacidad', modelo ='$modelo' WHERE id_bus='$id_bus'";
	$resultado = $con->query($sql);
	if($resultado == 1) {
	?>  
		<h3 class="titulo-eliminar">Resultado</h3>
		<section class="mensaje-eliminar">Bus editado</section>
		<meta http-equiv='refresh' content='1;URL=CGbus.php?'/>
	<?php
	} else {
	?>
		<div class="mensaje-error">No es posible editar este bus</div>
		<meta http-equiv='refresh' content='3;URL=CGbus.php?'/>
	<?php
	}

} else {
	//No se envio la misma placa
	$sql = "select * from $table where placa='$placa'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);
	$data = $resultado->fetch_assoc();

	//Nadie tiene esa placa 
	if($data['id_bus'] =="") {
		$sql = "UPDATE $table SET placa = '$placa', chofer ='$chofer', matricula = '$matricula', capacidad='$capacidad', modelo ='$modelo' WHERE id_bus='$id_bus'";
		$resultado = $con->query($sql);
		if($resultado == 1) {
		?>  
			<h3 class="titulo-eliminar">Resultado</h3>
			<section class="mensaje-eliminar">Bus editado</section>
			<meta http-equiv='refresh' content='1;URL=CGbus.php?'/>
		<?php
		} else {
		?>
			<div class="mensaje-error">No es posible editar este bus</div>
			<meta http-equiv='refresh' content='3;URL=CGbus.php?'/>
		<?php
		}
	}

	//Ya existe la placa 
	if($data['id_bus'] != "") {
	?>
		<div class="mensaje-error">No es posible editar este bus</div>
		<div class="mensaje-error">Ya hay existe un bus con la placa: <?php echo $placa ?></div>
		<meta http-equiv='refresh' content='3;URL=CGbus.php?'/>
	<?php
	}
}

?>


</body>
</html>