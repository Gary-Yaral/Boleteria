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
    <a href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php

$id_cliente = $_REQUEST["id_cliente"];
$cedula=$_REQUEST["cedula"];
$cedula_antigua=$_REQUEST["cedula_antigua"];
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$telefono=$_REQUEST["telefono"];
$direccion=$_REQUEST["direccion"];
$correo=$_REQUEST["correo"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "cliente"; 

if($cedula == $cedula_antigua) {
	// Es la misma cédula
	$sql = "UPDATE $table SET nombres ='$nombres', apellidos = '$apellidos', telefono= '$telefono', direccion='$direccion', correo ='$correo' WHERE id_cliente='$id_cliente'";
	$resultado = $con->query($sql);
	if($resultado == 1) {
	?>  
		<h3 class="titulo-eliminar">Resultado</h3>
		<section class="mensaje-eliminar">Cliente editado</section>
		<meta http-equiv='refresh' content='1;URL=CGcliente.php?'/>
	<?php
	} else {
	?>
		<div class="mensaje-error">No es posible editar este cliente</div>
		<meta http-equiv='refresh' content='3;URL=CGcliente.php?'/>
	<?php
	}


} else {
	// No es la misma cedula
	$sql = "select * from $table where cedula='$cedula'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);

	// Alguien la tiene
	if($filas > 0) {
	?>
		<div class="mensaje-error">No es posible editar este cliente</div>
		<div class="mensaje-error">Ya existe otro cliente registrado con esa cédula</div>
		<meta http-equiv='refresh' content='3;URL=CGcliente.php?'/>
	<?php

	} else {
		//Nadie la tiene
		$sql = "UPDATE $table SET cedula ='$cedula', nombres ='$nombres', apellidos = '$apellidos', telefono= '$telefono', direccion='$direccion', correo ='$correo' WHERE id_cliente='$id_cliente'";
		$resultado = $con->query($sql);
		if($resultado == 1) {
		?>  
			<h3 class="titulo-eliminar">Resultado</h3>
			<section class="mensaje-eliminar">Cliente editado</section>
			<meta http-equiv='refresh' content='1;URL=CGcliente.php?'/>
		<?php
		} else {
		?>
			<div>No se ha podido editar cliente</div>
		<?php
		}
	}
}
?>


</body>
</html>