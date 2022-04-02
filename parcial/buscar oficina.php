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
	<h1 class="titulo-resultados" >Ver Oficina</h1>
    <form class="form-buscar" action='CEoficina.php' method='post'> 
        <select name="id_oficina" id="">
            <option value="">Seleccione una oficina</option>
<?php
$con = mysqli_connect("localhost","root","","boletos");
$table = "oficina"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas === 0){
	?>
		<h3 class="No-resultado">No existen datos</h3>
	<?php
	} else {	 
		while ($fila = $resultado->fetch_assoc()){
            $id_oficina = $fila['id_oficina'];
            $nombre = $fila['nombre'];
    ?>
            <option value="<?php echo $id_oficina ?>"><?php echo $nombre ?></option>
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