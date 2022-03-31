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

<body>



<?php
echo"<form action='CEruta.php' method='post'> ";
echo" <center>
<table border=1 width=500></center>
<tr><td>
Ingrese numero de ruta: </td><td><input type='text' name='n_ruta'></td></tr>
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