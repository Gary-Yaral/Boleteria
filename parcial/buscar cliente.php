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
<center><font face="helvetica"><h1>Ingrese cliente</h1></center>



</center>	

</article>
<br><br><br>
<br>


<?php
echo"<form action='CEcliente.php' method='post'> ";
echo"<center>
<table border=1 width=500></center>
<tr><td>
Ingrese cliente: </td><td><input type='text' name=cedula></td></tr>
<td colspan = 2>

<center>
<input type='reset' value=Limpiar>
<input type='submit' ></center></td>
</table>

";


echo"</form>";
?>



</body>

</html>