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
<center><font face="helvetica"><h1>Resultados:</h1></center>



</center>	

</article>
<br><br><br>
<br>
<body>

<?php
$cedula=$_REQUEST["cedula"];
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos");
$table = "cliente"; 
$sql = "select * from $table where cedula='$cedula'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas === 0){
	echo"<center>No existen datos</center>";
} else {

echo "<center><table border=2 bgcolor='white' align='center'></center>";
echo"<tr>";
   
	     echo"<td bgcolor='#E38DED'><font color='black'>Nombres</td>";
		 echo"<td bgcolor='#E38DED'>Apellidos</td>";
			  echo"<td bgcolor='#E38DED'>Telefono</td>";
			  echo"<td bgcolor='#E38DED'>Direccion</td>";
			   echo"<td bgcolor='#E38DED'>Correo</td>";	  
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
    echo"<tr>";
		$nombres=$fila["nombres"];
		$apellidos=$fila["apellidos"];
		$telefono=$fila["telefono"];
		$direccion=$fila["direccion"];
		$correo=$fila["correo"];		   	 	 
		
		echo"<td>$nombres</td>";
		echo"<td>$apellidos</td>";
		echo"<td>$telefono</td>";
		echo"<td>$direccion</td>";
		echo"<td>$correo</td>";
	
	echo"</tr>";

}
echo "</table>";
}


?>



</body>

</html>