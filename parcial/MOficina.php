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

$id_oficina=$_REQUEST["id_oficina"];
$nombre=$_REQUEST["nombre"];
$direccion=$_REQUEST["direccion"];
$telefono=$_REQUEST["telefono"];
$correo=$_REQUEST["correo"];


?>

<form class="form-buscar" name='formulario' method='post' action='EOficina.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar esta oficina?</strong>
    </aside>
    <input type='hidden' name="id_oficina" value='<?php echo $id_oficina ?>'>
    <input type='hidden' name="nombre" value='<?php echo $nombre ?>'>
    <input type='hidden' name="direccion" value='<?php echo $direccion ?>'>
    <input type='hidden' name="telefono" value='<?php echo $telefono ?>'>
    <input type='hidden' name="correo" value='<?php echo $correo ?>'>
    <div>
        <a class="edit-cancelar" href=CGOficina.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>