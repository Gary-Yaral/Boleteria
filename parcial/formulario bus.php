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
<center><font face="helvetica"><h1>Ingreso Buses</h1></center>



</center>	

</article>
<br><br><br>
<br>

<?php
echo"<form action='procesar bus.php' method='post'> ";

echo"<center><table border=1 bgcolor='white' align='center'></center>

<tr><td>
Chofer: </td><td><input type='text' name=chofer><br></td></tr>
<tr><td>
Placa: </td><td><input type='text' name=placa><br></td></tr>
<tr><td>
Matricula: </td><td><input type='text' name=mat><br></td></tr>
<tr><td>
Capacidad: </td><td><input type='text' name=cap><br></td></tr>
<tr><td>
Modelo: </td><td><input type='text' name=mod><br></td></tr>
<tr><td>
Estado: </td><td><input type='text' name=est><br></td></tr>

<tr>
<td colspan=2><center>
<input type='reset' value=Limpiar>

<input type='submit'><center></td></tr>



</table>";


echo"</form>";
?>



<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>

<footer>
</footer>
</body>

</html>