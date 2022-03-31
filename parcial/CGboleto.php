<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
<a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
<a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
<center>
<header>
</header>	
</center>
<nav>
<section id="menu">
<br><br><br>
<center><font face="helvetica"><h1>REGISTROS</h1></center>



</center>	

</article>
<br><br><br>
<br>
<body>

<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos");
$table = "boleto"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas==0){
	echo"<center>No existen datos</center>";
} else {
?>
	<table>
	<thead>
		<tr>
			<th>Numero de boleto</th>
			<th>Fecha</th>
			<th>Valor</th>
			<th>Número de asiento</th>
			<th>Estado</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
	</thead>
<?php
 	while ($fila = $resultado->fetch_assoc()){
       	echo"<tr>";
	   	$num_boleto=$fila["num_boleto"];  
	   	$fecha=$fila["fecha"];
		$valor=$fila["valor"];
		$n_asiento=$fila["n_asiento"];
		$estado=$fila["estado"];
	 
	    echo"<td>$num_boleto</td>";
		echo"<td>$fecha</td>";
		echo"<td>$valor</td>";
		echo"<td>$n_asiento</td>";
			echo"<td>$estado</td>";
		echo"<td><a href='eliminarboleto.php?num_boleto=$num_boleto'><center><img src='imagenes/eliminar.png' width=35></center></a></td>";
		
		echo"<td><a href='editarboleto.php?num_boleto=$num_boleto'><center><img src='imagenes/editar.png' width=25></center></a></td>";
	    echo"</tr>";
}
echo "</table>";
}




?>



</body>

</html>