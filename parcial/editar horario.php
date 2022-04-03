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
		<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar Horario</h1>

<?php 
$id_horario=$_REQUEST["id_horario"];
// por primera vez presionado=0 

//conectar a la bd

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "select * from $table where id_horario='$id_horario'";
$resultado = $con->query($sql);
$filas =$resultado->fetch_assoc();

$id_bus=$filas["id_horario"];
$id_bus=$filas["id_bus"];
$id_ruta=$filas["id_ruta"];
$hora_llegada=$filas["hora_llegada"];
$hora_salida=$filas["hora_salida"];
$matricula=$filas["id_bus"];

?>
	<form class="form-editar" action='MHorario.php' method='post'>
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
            $id_ruta1 = $fila['id_ruta'];
            $origen = $fila['origen'];
            $destino = $fila['destino'];
    ?>
            <option <?php if($id_ruta == $id_ruta1) echo "selected" ?> value="<?php echo $id_ruta1 ?>"><?php echo $origen.'-'.$destino ?></option>
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
            $id_bus1 = $fila['id_bus'];
            $placa = $fila['placa'];
    ?>
            <option <?php if($id_bus == $id_bus1) echo "selected" ?> value="<?php echo $id_bus1 ?>"><?php echo $id_bus1.'-'.$placa ?></option>
    <?php
        }
    }
    ?>
            </select>
        </div>
        <div>
            <input type='hidden' name=id_horario value="<?php echo $id_horario ?>" required>
            <label for="">Hora Llegada</label>
            <input type='time' name=hora_llegada value="<?php echo $hora_llegada ?>" required>
        </div>
        <div>
            <label for="">Hora Salida</label>
            <input type='time' name=hora_salida value="<?php echo $hora_salida ?>" required>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit' value="Registrar">
        </section>
    </form>
</body>
</html>