<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario bus.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar.php"><input type="button" value= "BUSCAR"></a>
<a href="CGbus.php"><input type="button" value= "REGISTROS"></a>
<center>
<header>
</header>	
</center>
<nav>
<section id="menu">

<section>
</nav>
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
$table = "bus"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas === 0){

	echo"<center>No existen datos</center>";
} else {	

echo "<center><table border=1 bgcolor='white' align='center'></center>";
echo"<tr>";
   echo"<td bgcolor='#E38DED'><font color='black'>Chofer</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Placa</td>";
	     echo"<td bgcolor='#E38DED'><font color='black'>Matricula</td>";
			  echo"<td bgcolor='#E38DED'><font color='black'>Capacidad</td>";
			   echo"<td bgcolor='#E38DED'><font color='black'>Modelo</td>";
			      echo"<td bgcolor='#E38DED'><font color='black'>Estado</td>";
				  echo"<td bgcolor='#E38DED'><font color='black'>Eliminar</td>";
				  echo"<td bgcolor='#E38DED'><font color='black'>Editar</td>";
echo"</tr>";

 while ($fila = $resultado->fetch_assoc()){
		echo"<tr>";
		$chofer=$fila["chofer"];	
		$placa=$fila["placa"];
		$matricula=$fila["matricula"];
		$capacidad=$fila["capacidad"];
		$mod=$fila["modelo"];
		$est=$fila["estado"];
		
		echo"<td>$chofer</td>";
		echo"<td>$placa</td>";
		echo"<td>$matricula </td>";
		echo"<td>$capacidad</td>";
			echo"<td>$mod</td>";
			echo"<td>$est</td>";
		echo"<td><a href='eliminarbus.php?placa=$placa'><center><img src='imagenes/eliminar.png' width=35></center></a></td>";
		
		echo"<td><a href='editar.php?placa=$placa'><center><img src='imagenes/editar.png' width=25></center></a></td>";
	          echo"</tr>";
}
echo "</table>";
}




?>



</body>

</html>