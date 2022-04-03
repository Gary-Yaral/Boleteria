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
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$telefono=$_REQUEST["telefono"];
$direccion=$_REQUEST["direccion"];
$correo=$_REQUEST["correo"];

?>

<form class="form-buscar" name='formulario' method='post' action='ECliente.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar este cliente?</strong>
    </aside>
    <input type='hidden' name="id_cliente" value='<?php echo $id_cliente ?>'>
    <input type='hidden' name="cedula" value='<?php echo $cedula ?>'>
    <input type='hidden' name="nombres" value='<?php echo $nombres ?>'>
    <input type='hidden' name="apellidos" value='<?php echo $apellidos ?>'>
    <input type='hidden' name="telefono" value='<?php echo $telefono ?>'>
    <input type='hidden' name="direccion" value='<?php echo $direccion ?>'>
    <input type='hidden' name="correo" value='<?php echo $correo ?>'>
    <div>
        <a class="edit-cancelar" href=CGcliente.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>