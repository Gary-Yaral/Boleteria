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
$chofer=$_REQUEST["chofer"];
$placa=$_REQUEST["placa"];
$matricula=$_REQUEST["mat"];
$capacidad=$_REQUEST["cap"];
$mod=$_REQUEST["mod"];
$est=$_REQUEST["est"];


echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
      echo"<td bgcolor='#E38DED'><font color='black'>Chofer</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Placa</td>";
	     echo"<td bgcolor='#E38DED'>Matricula</td>";
			  echo"<td bgcolor='#E38DED'>Capacidad</td>";
			   echo"<td bgcolor='#E38DED'>Modelo</td>";
			      echo"<td bgcolor='#E38DED'>Estado</td>";
echo"</tr>";
echo"<tr>";
 echo"<td>$chofer</td>";
 echo"<td>$placa</td>";
	   echo"<td>$matricula</td>";
	   echo"<td><center>$capacidad</center></td>";
	   echo"<td>$mod</td>";
	   echo"<td>$est </td>";
echo"</tr>";	
echo"</table>";   
//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);


$guardar=mysql_query("insert into bus(chofer, placa, matricula, capacidad, modelo, estado) values ('$chofer','$placa','$matricula','$capacidad','$mod','$est')", $link);


echo "<br> Datos guardados correctamente";



?>


</body>

</html>