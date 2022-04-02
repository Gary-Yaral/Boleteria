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
@$id_bus=$_REQUEST["id_bus"];
@$chofer=$_REQUEST["chofer"];
@$placa=$_REQUEST["placa"];
@$matricula=$_REQUEST["matricula"];
@$capacidad=$_REQUEST["capacidad"];
@$modelo=$_REQUEST["modelo"];

$data = array(@$chofer, @$placa, @$matricula, @$capacidad, @$modelo);

?>

<form class="form-buscar" name='formulario' method='post' action='EBus.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar este bus?</strong>
    </aside>
    <input type='hidden' name="id_bus" value='<?php echo $id_bus ?>'>
    <input type='hidden' name="chofer" value='<?php echo $chofer ?>'>
    <input type='hidden' name="placa" value='<?php echo $placa ?>'>
    <input type='hidden' name="matricula" value='<?php echo $matricula ?>'>
    <input type='hidden' name="capacidad" value='<?php echo $capacidad ?>'>
    <input type='hidden' name="modelo" value='<?php echo $modelo ?>'>
    <div>
        <a href=CGbus.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>