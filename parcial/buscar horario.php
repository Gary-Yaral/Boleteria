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
        <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Buscar Horarios</h1>

    <form class="form-buscar" action='CEhorario.php' method='post'> 
        <select name="hora_salida" id="">
            <option value="">Selecione un horario</option>
<?php
$con = mysqli_connect("localhost","root","","boletos");
$table = "horario"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas === 0){
	?>
		<h3 class="No-resultado">No existen datos</h3>
	<?php
	} else {	 
		while ($fila = $resultado->fetch_assoc()){
            $id_horario = $fila['id_ruta'];
            $ruta = $fila['origen'];
            $destino = $fila['destino'];
    ?>
            <option value="<?php echo $id_ruta ?>"><?php echo $origen.'-'.$destino ?></option>
    <?php
        }
    }
    ?>
        </select>
        <div>
            <input type='submit' value="Buscar">
            <input type='reset' value=Limpiar>
        </div>
    </form>
         
</body>

</html>