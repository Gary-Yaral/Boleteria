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
echo"<form action='procesar cliente.php' method='post'> ";
echo"<center><table border=1></center>

<tr><td>
cedula: </td><td><input type='text' name=cedula><br></td></tr>
<tr><td>
nombres: </td><td><input type='text' name=nombres><br></td></tr>
<tr><td>
apellidos: </td><td><input type='text' name=apellidos><br></td></tr>
<tr><td>
telefono: </td><td><input type='text' name=telefono><br></td></tr>
<tr><td>
direccion: </td><td><input type='text' name=direccion><br></td></tr>
<tr><td>
correo: </td><td><input type='text' name=correo><br></td></tr>
<tr><td>
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