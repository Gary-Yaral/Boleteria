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
        <select name="id_horario" id="">
            <option value="">Seleccione un horario</option>
<?php

// Traemos las rutas disponibles para la hora actual
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "SELECT * FROM $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

// consultamos el destino de las rutas disponibles
$table1 = "ruta"; 
$sql1 = "SELECT * FROM $table1";
$resultado1 = $con->query($sql1);
$filas1 = mysqli_num_rows($resultado1); 

$r_ids= array();

$j = 0;
while ($fila = $resultado->fetch_assoc()){ 
    $r_ids[$j][0] = $fila["id_ruta"];
    $r_ids[$j][1] = $fila["id_horario"];
    $r_ids[$j][2] = $fila["hora_salida"];
    $j++; 
}

while ($fila1 = $resultado1->fetch_assoc()){ 
    $existe = false;   
    $ruta1=$fila1["id_ruta"]; 
    $origen = $fila1["origen"]; 
    $destino = $fila1["destino"]; 
    for($m = 0; $m < count($r_ids); $m++) {
        if($ruta1 == $r_ids[$m][0]){
?>
     <option value="<?php echo $r_ids[$m][1] ?>"><?php echo $origen.'-'.$destino.' - '.$r_ids[$m][2] ?></option>
<?php
        }
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