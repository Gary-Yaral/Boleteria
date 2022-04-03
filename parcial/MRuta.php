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

$id_ruta= $_REQUEST["id_ruta"];
$n_ruta= $_REQUEST["n_ruta"];
$origen= $_REQUEST["origen"];
$destino= $_REQUEST["destino"];
$valor= $_REQUEST["valor"];


?>

<form class="form-buscar" name='formulario' method='post' action='ERuta.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar esta ruta?</strong>
    </aside>
    <input type='hidden' name="id_ruta" value='<?php echo $id_ruta ?>'>
    <input type='hidden' name="n_ruta" value='<?php echo $n_ruta ?>'>
    <input type='hidden' name="origen" value='<?php echo $origen?>'>
    <input type='hidden' name="destino" value='<?php echo $destino ?>'>
    <input type='hidden' name="valor" value='<?php echo $valor ?>'>
    <div>
        <a class="edit-cancelar" href=CGRuta.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>