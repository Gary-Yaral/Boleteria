<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a class="btn-option" href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
<a class="btn-option" href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
<a class="btn-option" href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
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
$table = "cliente"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas === 0){
	echo"<center>No existen datos</center>";
} else {	
echo "<center><table border=1 bgcolor='white' align='center'></center>";
echo"<tr>";
   echo"<td bgcolor='#E38DED'><font color='black'>cedula</td>";
      echo"<td bgcolor='#E38DED'><font color='black'> nombres</td>";
	     echo"<td bgcolor='#E38DED'><font color='black'> apellidos</td>";
			  echo"<td bgcolor='#E38DED'><font color='black'>telefono</td>";
			   echo"<td bgcolor='#E38DED'><font color='black'>direccion</td>";
			    echo"<td bgcolor='#E38DED'><font color='black'>  correo</td>";
				  echo"<td bgcolor='#E38DED'><font color='black'>Eliminar</td>";
				  echo"<td bgcolor='#E38DED'><font color='black'>Editar</td>";
echo"</tr>";

 while ($fila = $resultado->fetch_assoc()){
	echo"<tr>";
		$cedula=$fila["cedula"];
	   	$nombres=$fila["nombres"];
	   	$apellidos=$fila["apellidos"];
		$telefono=$fila["telefono"];
		$direccion=$fila["direccion"];
		$correo=$fila["correo"];
	    echo"<td>$cedula</td>";
		echo"<td>$nombres</td>";
		echo"<td>$apellidos</td>";
		echo"<td>$telefono</td>";
		echo"<td>$direccion</td>";
		echo"<td>$correo</td>";
		echo"<td><a href='eliminarcliente.php?cedula=$cedula'><center><img src='imagenes/eliminar.png' width=35></center></a></td>";
		echo"<td><a href='editar cliente.php?cedula=$cedula'><center><img src='imagenes/editar.png' width=25></center></a></td>";
	echo"</tr>";
}
echo "</table>";
}

?>

</body>

</html>