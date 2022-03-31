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
<center><font face="helvetica"><h1>Ingreso Oficinas</h1></center>



</center>	

</article>
<br><br><br>
<br>



<?php
$nombre=$_REQUEST["nombre"];
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 
$sql = "select * from $table where nombre='$nombre'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0){
	echo"<center>No existen datos</center>";
}
else {

echo "<center><table border=1>";
echo"<tr>";
   
	     echo"<td bgcolor='#E38DED'>Direccion</td>";
			  echo"<td bgcolor='#E38DED'>Telefono</td>";
			   echo"<td bgcolor='#E38DED'>Correo</td>";	  
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
       echo"<tr>";
	   $direccion=$fila["direccion"];
	   $telefono=$fila["telefono"];
	   $correo=$fila["correo"];
	   
	   echo"<td>$direccion</td>";
	   echo"<td>$telefono</td>";
	   echo"<td>$correo</td>";
	   
	          echo"</tr>";
$i++;
}
echo "</table></center>";
}


?>



</body>

</html>