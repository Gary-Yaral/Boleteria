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
        <a href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
	</div>
    <!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Nuevo Cliente</h1>
    <form class="form-editar" action='procesar cliente.php' method='post'>
        <div>
            <label for="">Cédula:</label>
            <input type='text' name=cedula>
        </div>
        <div>
            <label for="">Nombres:</label>
            <input type='text' name=nombres>
        </div>
        <div>
            <label for="">Apellidos.</label>
            <input type='text' name=apellidos>
        </div>
        <div>
            <label for="">Telefono:</label>
            <input type='text' name=telefono>
        </div>
        <div>
            <label for="">Dirección:</label>
            <input type='text' name=direccion>
        </div>
        <div>
            <label for="">Correo</label>
            <input type='text' name=correo>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit' value ="Registrar">
        </section>
    </form>

</body>

</html>
