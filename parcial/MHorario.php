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
@$id_horario=$_REQUEST["id_horario"];
@$id_bus=$_REQUEST["id_bus"];
@$hora_llegada=$_REQUEST["hora_llegada"];
@$hora_salida=$_REQUEST["hora_salida"];
@$id_ruta=$_REQUEST["id_ruta"];


?>

<form class="form-buscar" name='formulario' method='post' action='EHorario.php'>
    <aside class="titulo-modal">
        <strong>¿Desea editar este horario?</strong>
    </aside>
    <input type='hidden' name="id_horario" value='<?php echo $id_horario ?>'>
    <input type='hidden' name="id_bus" value='<?php echo $id_bus ?>'>
    <input type='hidden' name="id_ruta" value='<?php echo $id_ruta ?>'>
    <input type='hidden' name="hora_llegada" value='<?php echo $hora_llegada ?>'>
    <input type='hidden' name="hora_salida" value='<?php echo $hora_salida ?>'>
    <div>
        <a class="edit-cancelar" href=CGHorario.php Title=Cancelar>Cancelar</a>
        <input type=submit value='Aceptar' name=Submit alt='Aceptar'>
    </div>
</form>
</body>
</html>