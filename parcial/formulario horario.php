<html>
<head>
<meta charset="UTF-8">
<title>buses</title>

</head>

<body>
<a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
<a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
<a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
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
echo"<form action='procesar horario.php' method='post'> ";
echo"<center><table border=1></center>

<tr><td>
horallegada: </td><td><input type='text' name=horallegada><br></td></tr>
<tr><td>
horasalida: </td><td><input type='text' name=horasalida><br></td></tr>
<tr><td>
estado: </td><td><input type='text' name=estado><br></td></tr>
<tr><td>


<tr>
<td colspan=2><center>
<input type='reset' value=Limpiar>

<input type='submit'><center></td></tr>



</table>";


echo"</form>";
?>



</body>

</html>