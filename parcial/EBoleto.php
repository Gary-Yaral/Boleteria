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
    <a href="buscar boleto.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
$id_boleto=$_REQUEST["id_boleto"];
$id_cliente = $_REQUEST['id_cliente'];
$id_cliente_sel = $_REQUEST['id_cliente_sel'];



if($id_cliente == $id_cliente_sel) {
	?>  
    <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Cliente de boleto fue editado</section>
    <meta http-equiv='refresh' content='3;URL=CGboleto.php?'/>
<?php
} else {

	$con = mysqli_connect("localhost","root","","boletos"); 
	$table = "boleto"; 

	$sql = "UPDATE $table SET id_cliente ='$id_cliente' WHERE id_boleto='$id_boleto'";
	$resultado = $con->query($sql);
	if($resultado == 1) {
	?>  
		<h3 class="titulo-eliminar">Resultado</h3>
		<section class="mensaje-eliminar">Cliente de boleto fue editado</section>
		<meta http-equiv='refresh' content='3;URL=CGboleto.php?'/>
	<?php
	} else {
	?>
		<div>No se ha podido editar bus</div>
	<?php
	}
}
?>


</body>
</html>