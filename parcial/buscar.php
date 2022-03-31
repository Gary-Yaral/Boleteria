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
<center><font face="helvetica"><h1>Ingrese placa</h1></center>



</center>	

</article>
<br><br><br>
<br>

<?php
echo"<form action='CEbus.php' method='post'> ";
echo"<center>
<table border=1 width=500 align='center'>
<tr><td>
Ingrese placa: </td><td><input type='text' name=placa></td></tr>
<td colspan = 2>

<center>
<input type='reset' value=Limpiar>
<input type='submit' ></center></td>
</table>
</center>
";


echo"</form>";
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
</footer>
</body>

</html>