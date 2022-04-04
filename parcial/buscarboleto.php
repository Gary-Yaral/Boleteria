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
        <input type="date" name="fecha" required>
        <select name="id_horario" id="" required>
            <option value="">Seleccione un horario</option>
        <?php

$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$table1 = "ruta"; 
$sql1 = "select * from $table1";
$resultado1 = $con->query($sql1);

$data = array();

while ($fila = $resultado1->fetch_assoc()){  
    $id_rut = $fila["id_ruta"];  
    $data[$id_rut]  =  $fila["origen"].' - '.$fila['destino']; 

} 

while ($fila1 = $resultado->fetch_assoc()){ 
    $id_horario=$fila1["id_horario"]; 
    $id_ruta= $fila1["id_ruta"]; 
 
    $salida = $fila1["hora_salida"]; 
    
?>
     <option value="<?php echo  $id_horario ?>"><?php echo $data[$id_ruta].' - '.$salida ?></option>
<?php
        
    
}

 ?>
        </select>
        <label for="n_boleto">Ingrese número:</label>
        <input type="number" name="n_boleto" id="n_boleto" placeholder="N° Boleto" required>
        <div>
            <input type='submit' value="Buscar">
            <input type='reset' value=Limpiar>
        </div>
    </form>

</body>

</html>