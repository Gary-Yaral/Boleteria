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
$horallegada=$_REQUEST["horallegada"];
$horasalida=$_REQUEST["horasalida"];
$estado=$_REQUEST["estado"];
echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";


 echo"<td bgcolor='#E38DED'><font color='black'>horallegada</td>";
 echo"<td bgcolor='#E38DED'><font color='black'>horasalida</td>";
	   echo"<td bgcolor='#E38DED'>estado</td>";
 echo"</tr>";
echo"<tr>";
 echo"<td>$horallegada</td>";
 echo"<td>$horasalida</td>";
	   echo"<td><center>$estado</center></td>";
	   echo"</tr>";	
echo"</table>";

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);

//insertar datos
$guardar=mysql_query("insert into horario(horallegada, horasalida, estado) values ('$horallegada','$horasalida','$estado')", $link);

echo "Datos guardados correctamente";



?>


</body>

</html>