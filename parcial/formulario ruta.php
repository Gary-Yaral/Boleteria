<<!DOCTYPE html>
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
        <a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
	</div>
    <!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Nueva Ruta</h1>
    <form class="form-editar" action='procesar ruta.php' method='post'>
        <div>
            <label for="">N° Ruta</label>
            <input type='number' name=n_ruta required>
        </div>
        <div>
            <label for="">Origen</label>
            <input type='text' name=origen required>
        </div>
        <div>
            <label for="">Destino</label>
            <input type='text' name=destino required>
        </div>
        <div>
            <label for="">Valor</label>
            <input step="any" type='number' name=valor required>
        </div>
        <div>
            <label for="">Tiempo Espera</label>
            <input type='time' name=tiempo_espera required>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit' value="Registrar">
        </section>
    </form>
</body>
</html>