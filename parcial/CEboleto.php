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
<center><font face="helvetica"><h1>Resultados:</h1></center>



</center>	

</article>
<br><br><br>
<br>
<body>

<?php
$num_boleto=$_REQUEST["num_boleto"];
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "boleto"; 
$sql = "select * from $table where num_boleto='$num_boleto'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0){
  echo"<center>No existen datos</center>";
} else {

echo "<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
   
      echo"<td bgcolor='#E38DED'><font color='black'>Fecha</td>";
	     echo"<td bgcolor='#E38DED'>Valor</td>";
			  echo"<td bgcolor='#E38DED'>Numero de asiento</td>";
			      echo"<td bgcolor='#E38DED'>Estado</td>";
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
    echo"<tr>";
	   	$fecha=$fila["fecha"];
		$valor=$fila["valor"];
		$n_asiento=$fila["n_asiento"];
		$estado=$fila["estado"];	 
		echo"<td>$fecha</td>";
		echo"<td>$valor</td>";
		echo"<td><center>$n_asiento</center></td>";
		echo"<td>$estado</td>";
	   
	echo"</tr>";
}
echo "</table>";
}




?>



</body>

</html>