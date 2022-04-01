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
	<h1 class="titulo-resultados" >Buscar Bus</h1>
    <form class="form-buscar" action='CEbus.php' method='post'>
        <label for="nombre">Ingrese la placa:</label> 
        <input type='text' name=placa>
        <div>
            <input type='submit' value ="Buscar">
            <input type='reset' value=Limpiar>
        </div>
</form>

</body>

</html>