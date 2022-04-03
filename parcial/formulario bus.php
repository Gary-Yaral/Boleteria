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
	<h1 class="titulo-resultados" >Nuevo Bus</h1>
    <form class="form-editar" action='procesar bus.php' method='post'>
        <div>
            <label for="">Chofer</label>
            <input type='text' name=chofer>
        </div>
        <div>
            <label for="">Placa</label>
            <input type='text' name=placa>
        </div>
        <div>
            <label for="">Matrícula</label>
            <input type='text' name=matricula>
        </div>
        <div>
            <label for="">Capacidad</label>
            <input type='text' name=capacidad>
        </div>
        <div>
            <label for="">Modelo</label>
            <input type='text' name=modelo>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit'>
        </section>
    </form>

</body>

</html>