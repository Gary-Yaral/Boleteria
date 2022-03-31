<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario boleto.php"><input type="button" value= "INGRESAR"></a>
<a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
<a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
<center>
<header>
</header>	
</center>
<nav>
<section id="menu">
<br><br><br>
<center><font face="helvetica"><h1>Ingreso Boletos</h1></center>



</center>	

</article>
<br><br><br>
<br>

<?php
echo"<form action='procesar boleto.php' method='post'> ";

echo"<center><table border=1 bgcolor='white' align='center'></center>

<tr><td>
Numero de boleto: </td><td><input type='text' name=num_boleto><br></td></tr>
<tr><td>
Fecha: </td><td><input type='date' name=fecha><br></td></tr>
<tr><td>
Valor: </td><td><input type='double' name=valor><br></td></tr>
<tr><td>
Numero de asiento: </td><td><input type='int' name=n_asiento><br></td></tr>
<tr><td>
Estado: </td><td><input type='text' name=estado><br></td></tr>

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