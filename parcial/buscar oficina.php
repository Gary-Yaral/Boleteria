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
        <a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Oficina</h1>
    <form class="form-buscar" action='CEoficina.php' method='post'> 
        <select name="nombre" id="">
            <option value="">Seleccione una oficina</option>
            <option value="1">Babahoyo</option>
            <option value="2">Vinces</option>
        </select>
        <div>
            <input type='submit' >
            <input type='reset' value=Limpiar>
        </div>
    </form>
</body>

</html>