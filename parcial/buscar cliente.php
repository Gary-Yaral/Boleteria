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
        <a href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Cliente</h1>
    <form class="form-buscar" action='CEcliente.php' method='post'> 
        <label for="cedula">Ingrese cédula:</label>
        <input type='text' name=cedula id="cedula">
        <div>
            <input type='submit' >
            <input type='reset' value=Limpiar>
        </div>
    </form>
</body>
</html>