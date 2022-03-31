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
<br><br><br>
<center><font face="helvetica"><h1>Resultados:</h1></center>



</center>	

</article>
<br><br><br>
<br>
<body>

<?php
$placa=$_REQUEST["placa"];
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "bus"; 
$sql = "select * from $table where placa='$placa'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0){
	echo"<center>No existen datos</center>";
} else {

echo "<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
   
      echo"<td bgcolor='#E38DED'><font color='black'>Placa</td>";
	     echo"<td bgcolor='#E38DED'>Matricula</td>";
			  echo"<td bgcolor='#E38DED'>Capacidad</td>";
			   echo"<td bgcolor='#E38DED'>Modelo</td>";
			      echo"<td bgcolor='#E38DED'>Estado</td>";
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
    echo"<tr>";	
		$placa=$fila["placa"];
		$matricula=$fila["matricula"];
		$capacidad=$fila["capacidad"];
		$mod=$fila["modelo"];
		$est=$fila["estado"];

		echo"<td>$placa</td>";
		echo"<td>$matricula</td>";
		echo"<td><center>$capacidad</center></td>";
		echo"<td>$mod</td>";
		echo"<td>$est </td>";
	   
	echo"</tr>";
}
echo "</table>";
}




?>



</body>

</html>