<html>
<head>
<meta charset="UTF-8">
<title>ruta</title>

</head>

<body>
<a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
<a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
<center>
<header>
</header>	
</center>
<nav>
<section id="menu">
<br><br><br>
<center><font face="helvetica"><h1>Resultados</h1></center>



</center>	

</article>
<br><br><br>
<br>
<?php
$n_ruta=$_REQUEST["n_ruta"];
$origen=$_REQUEST["origen"];
$destino=$_REQUEST["destino"];
$estado=$_REQUEST["estado"];

$link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);


$result=mysql_query("select * from ruta where n_ruta = '$n_ruta'", $link);
$row=mysql_num_rows($result);
if ($row > 0)
{
echo"<center>La ruta $n_ruta ya se encuentra registrada en el sistema	</center>";
}else{

echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
      echo"<td bgcolor='#E38DED'><font color='black'>Numero de Ruta</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Origen</td>";
	     echo"<td bgcolor='#E38DED'>Destino</td>";
			  echo"<td bgcolor='#E38DED'>Estado</td>";
			   echo"</tr>";
echo"<tr>";
 echo"<td>$n_ruta</td>";
 echo"<td>$origen</td>";
	   echo"<td>$destino</td>";
	   echo"<td><center>$estado</center></td>";
	   
echo"</tr>";	
echo"</table>";
echo"<br><br><br>";  

//insertar datos
$result=mysql_query("insert into ruta(n_ruta, origen, destino, estado) values ('$n_ruta','$origen','$destino','$estado')", $link);

echo "Datos guardados correctamente";

}

?>


</body>

</html>