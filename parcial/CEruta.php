<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

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
<center><font face="helvetica"><h1>Ingreso Rutas</h1></center>



</center>	

</article>
<br><br><br>
<br>



<?php
$n_ruta=$_REQUEST["n_ruta"];
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "ruta"; 
$sql = "select * from $table where n_ruta='$n_ruta'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

if($filas==0){
	echo"<center>No existen datos</center>";
} else {
echo "<center><table border=1></center>";
echo"<tr>";
         
		  echo"<td bgcolor='#E38DED'>Numero de ruta</td>";
	     echo"<td bgcolor='#E38DED'>Origen</td>";
			  echo"<td bgcolor='#E38DED'>Destino</td>";
			   echo"<td bgcolor='#E38DED'>Estado</td>";	  
				  
echo"</tr>";
 while ($fila = $resultado->fetch_assoc()){
       	echo"<tr>";	   
		$n_ruta=$fila["n_ruta"];
		$origen=$fila["origen"];;
		$destino=$fila["destino"];;
		$estado=$fila["estado"];;
		   	  
			   	  	 
		echo"<td>$n_ruta</td>";
		echo"<td>$origen</td>";
		echo"<td>$destino</td>";
		echo"<td>$estado</td>";
	   
	    echo"</tr>";
}
echo "</table>";
}


?>



</body>

</html>