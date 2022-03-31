<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
<a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
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

<?php

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);


if($filas==0)
	{
	echo"No existen datos";
	}
	else
	{
	echo "<center><table border=1></center>";
	echo"<tr>";
	echo"<td bgcolor='#E38DED'>Nombre</td>";
		echo"<td bgcolor='#E38DED'>Direccion</td>";
			echo"<td bgcolor='#E38DED'>Telefono</td>";
				echo"<td bgcolor='#E38DED'>Correo</td>";
					echo"<td bgcolor='#E38DED'>Eliminar</td>";
					echo"<td bgcolor='#E38DED'>Editar</td>";
	echo"</tr>";

 	while ($fila = $resultado->fetch_assoc()){
		echo"<tr>";
		$nombre=$fila["nombre"];
		$direccion=$fila["direccion"];
		$telefono=$fila["telefono"];
		$correo=$fila["correo"];
		$id_oficina = $fila["id_oficina"];
		
		echo"<td>$nombre</td>";
		echo"<td>$direccion</td>";
		echo"<td>$telefono</td>";
		echo"<td>$correo</td>";
		echo"<td><a href='eliminaroficina.php?nombre=$nombre'><center><img src='imagenes/eliminar.png' width=35></center></a></td>";	
		echo"<td><a href='editar oficina.php?nombre=$nombre'><center><img src='imagenes/editar.png' width=25></center></a></td>";
		echo"</tr>";
	}
        echo "</table>";
}

?>

</body>

</html>