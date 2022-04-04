<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/results.css">
	<title>Document</title>
</head>
<?php 
$id_boleto=$_REQUEST["id_boleto"];
$id_cliente_sel = $_REQUEST['id_cliente'];
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "boleto"; 
$sql = "select * from $table where id_boleto = '$id_boleto'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
$num_boleto = $fila['num_boleto']

?>
<body>
	<div class="opciones">
		<a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
		<a href="buscar boleto.php"><input type="button" value= "BUSCAR"></a>
		<a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Editar (Boleto - Cliente)</h1>
	<form class="form-buscar" action='MBoleto.php' method='post'>
		<section>
            <span class="boleto-text">ID Boleto: <?php echo $id_boleto ?></span><br>
            <span class="boleto-text">Nº boleto: <?php echo $num_boleto ?></span>
            <input type="hidden" name="id_cliente_sel" id="id_cliente_sel" value ="<?php echo $id_cliente_sel ?>">
            <input type="hidden" name="id_boleto" id="id_boleto" value ="<?php echo $id_boleto ?>">
			<select name="id_cliente" id="id_cliente">
				<option value="">Seleccionar cliente</option>

<?php 


$table = "cliente"; 
$sql = "select * from $table";
$resultado = $con->query($sql);

while ($fila = $resultado->fetch_assoc()){ 
       
	$id_cliente=$fila["id_cliente"]; 
	$cedula=$fila["cedula"];
	$nombres=$fila["nombres"];
	$apellidos=$fila["apellidos"];
?>	
	<option value="<?php echo $id_cliente ?>"><?php echo $cedula.': '.$nombres.' ',$apellidos?></option>
<?php
}
?>
			</select>
		</section>
		<section>
            <a class="cancelar-boleto" href="CGboleto.php">Cancelar</a>
            <input type='submit' value="Registrar">
        </section>
	</form>
	<script>
		const id_cliente = document.querySelector('#id_cliente');
		const id_cliente_sel = document.querySelector('#id_cliente_sel');
		id_cliente.value = id_cliente_sel.value
	</script>
</body>
</html>