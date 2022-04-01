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
	<div class="opciones">
        <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Horarios</h1>

    <form class="form-buscar" action='CEhorario.php' method='post'> 
        <select name="hora_salida" id="">
            <option value="">Selecione un horario</option>
            <option value="10:00">10:00</option>
        </select>
        <div>
            <input type='submit' value ="Buscar">
            <input type='reset' value=Limpiar>
        </div>
    </form>

</body>

</html>