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
    <a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php

$id_oficina=$_REQUEST["id_oficina"];
$nombre=$_REQUEST["nombre"];
$direccion=$_REQUEST["direccion"];
$telefono=$_REQUEST["telefono"];
$correo=$_REQUEST["correo"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 

$sql = "UPDATE $table SET id_oficina ='$id_oficina', nombre ='$nombre', direccion = '$direccion', telefono='$telefono', correo ='$correo' WHERE id_oficina='$id_oficina'";
$resultado = $con->query($sql);
if($resultado == 1) {
?>  
    <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Oficina editado</section>
    <meta http-equiv='refresh' content='1;URL=CGOficina.php?'/>
<?php
} else {
?>
    <div>No se ha podido editar oficina</div>
<?php
}
?>


</body>
</html>