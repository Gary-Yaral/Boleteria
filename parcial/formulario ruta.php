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
<center><font face="helvetica"><h1>Ingreso Ruta</h1></center>



</center>	

</article>
<br><br><br>
<br>

<body>
<body>



<?php
echo"<form action='procesar ruta.php' method='post'> ";
echo"<center><table border=1></center>

<tr><td>
Numero de ruta: </td><td><input type='text' name=n_ruta><br></td></tr>
<tr><td>
Origen: </td><td><input type='text' name=origen><br></td></tr>
<tr><td>
Destino: </td><td><input type='text' name=destino><br></td></tr>
<tr><td>
Estado: </td><td><input type='text' name=estado><br></td></tr>

<tr>
<td colspan=2><center>
<input type='reset' value=Limpiar>

<input type='submit'><center></td></tr>



</table>";


echo"</form>";
?>



</body>

</html>