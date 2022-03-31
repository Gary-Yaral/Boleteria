<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
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
$table = "horario"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0)
{
echo"<center>No existen datos</center>";
}
else
{
//echo"Si existen datos";	

echo "<center><table border=1 bgcolor='white' align='center'></center>";
echo"<tr>";
   echo"<td bgcolor='#E38DED'><font color='black'>Hora llegada</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Hora salida</td>";
	     echo"<td bgcolor='#E38DED'><font color='black'>estado</td>";
				  echo"<td>Eliminar</td>";
				  echo"<td>Editar</td>";
echo"</tr>";

 	while ($fila = $resultado->fetch_assoc()){
		echo"<tr>";
		$horallegada=$fila["hora_llegada"];
		$horasalida=$fila["hora_salida"];
	   	$estado=$fila["estado"];
	    echo"<td>$horallegada</td>";
		echo"<td>$horasalida</td>";
		echo"<td>$estado</td>";
		echo"<td><a href='eliminar horario.php?horallegada=$horallegada'><center><img src='imagenes/eliminar.png' width=35></center></a></td>";
		
		echo"<td><a href='editar horario.php?horallegada=$horallegada'><center><img src='imagenes/editar.png' width=25></center></a></td>";
	    echo"</tr>";

}
echo "</table>";
}

?>

</body>

</html>