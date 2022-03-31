<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario cliente.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar cliente.php"><input type="button" value= "BUSCAR"></a>
<a href="CGcliente.php"><input type="button" value= "REGISTROS"></a>
<center>
<header>
</header>	
</center>
<nav>
<section id="menu">
<br><br><br>
<center><font face="helvetica"><h1>Ingreso cliente</h1></center>



</center>	

</article>
<br><br><br>
<br>

<?php
$cedula=$_REQUEST["cedula"];
$nombres=$_REQUEST["nombres"];
$apellidos=$_REQUEST["apellidos"];
$telefono=$_REQUEST["telefono"];
$direccion=$_REQUEST["direccion"];
$correo=$_REQUEST["correo"];
echo"<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
 echo"<td bgcolor='#E38DED'><font color='black'>Cedula</td>";
      echo"<td bgcolor='#E38DED'><font color='black'>nombres</td>";
	     echo"<td bgcolor='#E38DED'>apellidos</td>";
			  echo"<td bgcolor='#E38DED'>telefono</td>";
			   echo"<td bgcolor='#E38DED'>direccion</td>";
			      echo"<td bgcolor='#E38DED'>correo</td>";
				  
				  echo"</tr>";
				  echo"<tr>";
				  echo"<td>$cedula</td>";
				    echo"<td>$nombres</td>";
	    echo"<td>$apellidos</td>";
	   echo"<td>$telefono</td>";
	    echo"<td>$direccion</td>";
	   echo"<td>$correo</td>";
	   echo"</tr>";
	   echo"</table>"; 

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);

//insertar datos
$guardar=mysql_query("insert into cliente(cedula, nombres, apellidos, telefono, direccion, correo) values ('$cedula','$nombres','$apellidos','$telefono','$direccion','$correo')", $link);

echo "Datos guardados correctamente";



?>


</body>

</html>