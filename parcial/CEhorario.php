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
<center><font face="helvetica"><h1>Resultados:</h1></center>



</center>	

</article>
<br><br><br>
<br>
<body>

<?php

$horasalida = $_REQUEST["hora_salida"];

//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "select * from $table where hora_salida='$horasalida'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0){
	echo"<center>No existen datos</center>";
} else {
echo "<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
   
	     echo"<td bgcolor='#E38DED'><font color='black'>horallegada</td>";
			  echo"<td bgcolor='#E38DED'>horasalida</td>";
			   echo"<td bgcolor='#E38DED'>estado</td>";	  
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
       echo"<tr>";
		$horallegada=$fila["hora_llegada"];
		$horasalida=$fila["hora_salida"];
		$estado=$fila["estado"];

	   echo"<td>$horallegada</td>";
	   echo"<td>$horasalida</td>";
	   echo"<td>$estado</td>";
	   
	          echo"</tr>";
}
echo "</table>";
}


?>



</body>

</html>