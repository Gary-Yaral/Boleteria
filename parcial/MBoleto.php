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


?>

<form class="form-buscar" name='formulario' method='post' action='EBoleto.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar este boleto?</strong>
    </aside>
    <input type='hidden' name="id_boleto" value='<?php echo $id_boleto ?>'>
    <input type='hidden' name="id_cliente" value='<?php echo $id_cliente ?>'>
    <input type='hidden' name="id_cliente_sel" value='<?php echo $id_cliente_sel ?>'>
    <div>
        <a class="edit-cancelar" href=CGboleto.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>