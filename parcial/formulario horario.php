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
        <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
    <!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Nuevo Horario</h1>
    <form class="form-editar" action='procesar horario.php' method='post'>
        <div>
            <label for="">N° Ruta</label>
            <select name="id_ruta" id="">
                <option value="">Seleccione la ruta</option>
<?php
$con = mysqli_connect("localhost","root","","boletos");
$table = "ruta"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas === 0){
	?>
		<h3 class="No-resultado">No existen datos</h3>
	<?php
	} else {	 
		while ($fila = $resultado->fetch_assoc()){
            $id_ruta = $fila['id_ruta'];
            $origen = $fila['origen'];
            $destino = $fila['destino'];
    ?>
            <option value="<?php echo $id_ruta ?>"><?php echo $origen.'-'.$destino ?></option>
    <?php
        }
    }
    ?>
            </select>
        </div>
        <div>
            <label for="">Bus</label>
            <select name="id_bus" id="">
                <option value="">Seleccione el bus</option>

                <?php
$con = mysqli_connect("localhost","root","","boletos");
$table = "bus"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas === 0){
	?>
		<h3 class="No-resultado">No existen datos</h3>
	<?php
	} else {	 
		while ($fila = $resultado->fetch_assoc()){
            $id_bus = $fila['id_bus'];
            $placa = $fila['placa'];
    ?>
            <option value="<?php echo $id_bus ?>"><?php echo $id_bus.'-'.$placa ?></option>
    <?php
        }
    }
    ?>
            </select>
        </div>
        <div>
            <label for="">Hora Llegada</label>
            <input type='time' name=hora_llegada required>
        </div>
        <div>
            <label for="">Hora Salida</label>
            <input type='time' name=hora_salida required>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit' value="Registrar">
        </section>
    </form>
    <script>
        const form = document.querySelector('form')
    </script>
</body>
</html>
