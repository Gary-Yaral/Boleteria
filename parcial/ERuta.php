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
$id_ruta=$_REQUEST["id_ruta"];
$n_ruta=$_REQUEST["n_ruta"];
$origen=$_REQUEST["origen"];
$destino=$_REQUEST["destino"];
$valor=$_REQUEST["valor"];

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "ruta"; 

$sql = "UPDATE $table SET id_ruta ='$id_ruta', n_ruta ='$n_ruta', origen= '$origen', destino='$destino', valor ='$valor' WHERE id_ruta='$id_ruta'";
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
?>


</body>
</html>