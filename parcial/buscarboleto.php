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
        <a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Boleto</h1>

    <form class="form-buscar" action='CEboleto.php' method='post'>
        <label for="cedula">Selecione la fecha:</label>
        <input type="date" name="fecha">
        <select name="horario" id="">
            <option value="">Seleccione horario</option>
            <option value="">10:00</option>
            <option value="">14:00</option>
        </select>
        <select name="ruta" id="">
            <option value="">Seleccione ruta</option>
            <option value="">Babahoy-vinces</option>
        </select>
        <label for="n_boleto">Ingrese número:</label>
        <input type="text" name="n_boleto" id="n_boleto" placeholder="N° Boleto">
        <div>
            <input type='submit' value="Buscar">
            <input type='reset' value=Limpiar>
        </div>
    </form>

</body>

</html>