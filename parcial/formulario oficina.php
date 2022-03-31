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

<body>
<body>



<?php
echo"<form action='procesar oficina.php' method='post'> ";
echo"<center><table border=1></center>

<tr><td>
Nombre: </td><td><input type='text' name=nombre><br></td></tr>
<tr><td>
Direccion: </td><td><input type='text' name=direccion><br></td></tr>
<tr><td>
Telefono: </td><td><input type='text' name=telefono><br></td></tr>
<tr><td>
Correo: </td><td><input type='text' name=correo><br></td></tr>

<tr>
<td colspan=2><center>
<input type='reset' value=Limpiar>

<input type='submit'><center></td></tr>



</table>";


echo"</form>";
?>



</body>

</html>