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
        <a href="formulario boleto.php"><input type="button" value= "GENERAR"></a>
        <a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Generar boleto</h1>



<form class="form-buscar" action='procesar boleto.php' method='post'>
    <select name="ruta" id="">
        <option value="">Selecione la ruta</option>
        <option value="">Babahoyo-Vinces</option>
    </select>
    <div>
        <input type='submit' value="Generar">
        <input type='reset' value=Limpiar>
    </div>    
</body>

</html>