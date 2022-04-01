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
$matricula=$_REQUEST["matricula"];
$capacidad=$_REQUEST["capacidad"];
$modelo=$_REQUEST["modelo"];
$estado=$_REQUEST["estado"];
echo $placa;
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "bus"; 

$sql = "UPDATE $table SET chofer ='$chofer', placa ='$placa', matricula = '$matricula', capacidad='$capacidad', modelo ='$modelo', estado='$estado' WHERE id_bus='$id_bus'";
$resultado = $con->query($sql);
echo $resultado;
if($resultado == 1) {
?>  
    <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Bus editado</section>
    <meta http-equiv='refresh' content='1;URL=CGbus.php?'/>
<?php
} else {
?>
    <div>No se ha podido editar bus</div>
<?php
}
?>


</body>
</html>