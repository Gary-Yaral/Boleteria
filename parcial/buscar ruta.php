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
        <a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Ruta</h1>

    <form class="form-buscar" action='CEruta.php' method='post'>
        <select name="n_ruta" id="">
            <option value="">Seleccione una ruta</option>
            <option value="0">Babahoyo - Vinces</option>
        </select>
        <div>
            <input type='submit' value ="Buscar">
            <input type='reset' value=Limpiar>
        </div>
    </form>

</body>

</html>