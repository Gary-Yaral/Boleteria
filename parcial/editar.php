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
<?php 
$placa=$_REQUEST["placa"];
// por primera vez presionado=0 
echo "<form name=formulario method=post action=editar.php?Presionado=si&placa=$placa>";

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);
  
$resultado=mysql_query("select * from bus where placa='$placa'",$link);
$row=mysql_num_rows($resultado);


	 
	  $chofer=mysql_result($resultado,0,"chofer");
	   	   $placa=mysql_result($resultado,0,"placa");
	   	   $matricula=mysql_result($resultado,0,"matricula");
			   	   $cap=mysql_result($resultado,0,"capacidad");
				   $mod=mysql_result($resultado,0,"modelo");
				   $est=mysql_result($resultado,0,"estado");
				    


echo"<form action='CGbus.php' method='post'>
<table border=1 width=500>
<tr><td>
Chofer: </td><td><input type='text' name=cedula value='$chofer'></td></tr>
<tr><td>
Placa: </td><td><input type='text' name=nombre value='$placa'></td></tr>
<tr><td>
Matricula: </td><td><input type='text' name=nombre value='$matricula'></td></tr>
<tr><td>
capacidad: </td><td><input type='text' name=nombre value='$cap'></td></tr>
<tr><td>
modelo: </td><td><input type='text' name=nombre value='$mod'></td></tr>
</td></tr>
<tr><td>
Estado: </td><td><input type='text' name=nombre value='$est'></td></tr>

<tr>
<td colspan=2><center>
<input type='reset' value=Limpiar>

<input type='submit'><center></td></tr>";






//etiqueta de html que sirve para redireccionar automáticamente en los segundos que ud quiera





echo "</table>";
echo "</form>";
?>
</form>
</div>
</body>
</html>