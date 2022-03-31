<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
<a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
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
$nombre=$_REQUEST["nombre"];
$direccion=$_REQUEST["direccion"];
$telefono=$_REQUEST["telefono"];
$correo=$_REQUEST["correo"];



echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
      echo"<td bgcolor='#E38DED'><font color='black'>Nombre</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>Direccion</td>";
	     echo"<td bgcolor='#E38DED'>Telefono</td>";
			  echo"<td bgcolor='#E38DED'>Correo</td>";
			   echo"</tr>";
echo"<tr>";
 echo"<td>$nombre</td>";
 echo"<td>$direccion</td>";
	   echo"<td>$telefono</td>";
	   echo"<td><center>$correo</center></td>";
	   
echo"</tr>";	
echo"</table>";
echo"<br><br><br>";  
//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);

//insertar datos
$guardar=mysql_query("insert into oficina(nombre, direccion, telefono, correo) values ('$nombre','$direccion','$telefono','$correo')", $link);

echo "Datos guardados correctamente";



?>


</body>

</html>