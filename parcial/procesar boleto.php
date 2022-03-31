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
$fecha=$_REQUEST["fecha"];
$valor=$_REQUEST["valor"];
$n_asiento=$_REQUEST["n_asiento"];
$estado=$_REQUEST["estado"];


echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
      echo"<td bgcolor='#E38DED'><font color='black'>Numero de asiento</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Fecha</td>";
	     echo"<td bgcolor='#E38DED'>Valor</td>";
			  echo"<td bgcolor='#E38DED'>Numero de asiento</td>";
			      echo"<td bgcolor='#E38DED'>Estado</td>";
echo"</tr>";
echo"<tr>";
 echo"<td>$num_boleto</td>";
 echo"<td>$fecha</td>";
	   echo"<td>$valor</td>";
	   echo"<td><center>$n_asiento</center></td>";
	   echo"<td>$estado</td>";
echo"</tr>";	
echo"</table>";   
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "boleto"; 
$sql = "insert into $table(num_boleto, fecha, valor, n_asiento, estado) values ('$num_boleto','$fecha','$valor','$n_asiento','$estado')";
$resultado = $con->query($sql);

echo "<br> Datos guardados correctamente";

?>


</body>

</html>