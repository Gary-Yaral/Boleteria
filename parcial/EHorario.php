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
$id_horario=$_REQUEST["id_horario"];
$id_bus=$_REQUEST["id_bus"];
$id_ruta=$_REQUEST["id_ruta"];
$hora_llegada=$_REQUEST["hora_llegada"];
$hora_salida=$_REQUEST["hora_salida"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 

$sql = "UPDATE $table SET id_bus ='$id_bus', id_ruta ='$id_ruta', hora_llegada = '$hora_llegada', hora_salida='$hora_salida' WHERE id_horario='$id_horario'";
$resultado = $con->query($sql);
if($resultado == 1) {
?>  
    <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Horario editado</section>
    <meta http-equiv='refresh' content='1;URL=CGhorario.php?'/>
<?php
} else {
?>
    <div>No se ha podido editar horario</div>
<?php
}
?>


</body>
</html>