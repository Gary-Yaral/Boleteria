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
    <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 

@$id_horario=$_REQUEST["id_horario"];

@$id_bus=$_REQUEST["id_bus"];
@$id_bus_sel=$_REQUEST["id_bus_sel"];

@$id_ruta=$_REQUEST["id_ruta"];
@$id_ruta_sel=$_REQUEST["id_ruta_sel"];


@$hora_salida=$_REQUEST["hora_salida"];
@$hora_salida_sel=$_REQUEST["hora_salida_sel"];

$con = mysqli_connect("localhost","root","","boletos");

if($id_bus == $id_bus_sel && $id_ruta == $id_ruta_sel && $hora_salida == $hora_salida_sel) {
	?>  
    <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Horario editado</section>
    <meta http-equiv='refresh' content='1;URL=CGhorario.php?'/>
	<?php

} else {
	$table="horario";
	$sql = "select * from $table where id_bus='$id_bus' and id_ruta = '$id_ruta' and hora_salida = '$hora_salida'";
	$resultado = $con->query($sql);
	$filas = mysqli_num_rows($resultado);

	// Horario existe
	if($filas > 0) {
	?>
		<div class="mensaje-error">No es posible agregar este horario</div>
		<div class="mensaje-error">Ya existe otro horario con esa ruta y bus</div>
		<meta http-equiv='refresh' content='5;URL=CGhorario.php?'/>
	<?php

	} else {
	// horario no existe
	$sql = "UPDATE $table SET id_ruta ='$id_ruta', id_bus ='$id_bus', hora_salida= '$hora_salida'WHERE id_horario='$id_horario'";
	$resultado = $con->query($sql);

		if($resultado == 1) {
		?>  
			<h3 class="titulo-eliminar">Resultado</h3>
			<section class="mensaje-eliminar">Horario Editado</section>
			<meta http-equiv='refresh' content='1;URL=CGhorario.php?'/>
		<?php
		
		} else {
		?>
			<div class="mensaje-error">No es posible editar este horario</div>
			<meta http-equiv='refresh' content='3;URL=CGhoraro.php?'/>
		<?php	
		}
	}
}

?>


</body>
</html>