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



</center>	

</article>
<br><br><br>
<br>
<?php 
$nombre=$_REQUEST["nombre"];
// por primera vez presionado=0 
@$Presionado=$_REQUEST["Presionado"];
echo "<form name=formulario method=post action=eliminaroficina.php?Presionado=si&nombre=$nombre>";

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);
  
  
  
//busqueda si esa cédula todavía existe
$result = mysql_query("SELECT * FROM oficina Where (nombre='$nombre') ", $link); 
$row = mysql_num_rows($result);

echo("<br><br>");

echo "<center>";


if (strlen(@$Presionado)==0)
{
echo"<center><table  border='1' cellspacing='0' cellpadding='0' style='width:300px;'></center>";
echo"<tr>";
echo"<td>";
echo"<center>Eliminar Oficina</center>";
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td>";
echo"<table border='0' cellspacing='0' cellpadding='0' style='width:300px;'>";
echo"<tbody>";
echo"<tr>";
echo"<td width=40>";
echo"<center><img src=icono/info.gif border=0></center>";
echo"</td>";
echo"<td style='text-align:center;'>
<br>¿Esta seguro de eliminar esta oficina?</td>";
echo"</tr>";
echo"<td colspan='2'>";
echo"<center>";
echo"<a href=CGoficina.php Title=Cancelar>Cancelar</a>";
echo"<input type=submit value='Eliminar' name=Submit alt='Eliminar'>";
echo"</center>";
echo"</td>";
echo"</tbody>";
echo"</table>";
//nuevo

}

if (strlen(@$Presionado)==2){

$result = mysql_query("DELETE FROM oficina WHERE nombre='$nombre' ", $link); 
$result = mysql_query($result);
echo "</td></tr></table>";
echo"<table border='1' cellspacing='0' cellpadding='0' style='width:290px;'>";
echo"<tr>";
echo"<td>";
echo"<center>Información</center>";
echo"</td>";
echo"</tr>";

echo"<tr>";
echo"<td>";
echo"<table border='0' class='' cellspacing='0' cellpadding='0' style='width:290px;'>";
echo"<tbody>";

echo"<tr>";
echo"<td width=40>";
echo"<center><img src=icono/info.gif border=0></center>";
echo"</td>";
echo"<td style='text-align:center;'><br><span style='font-family:Tahoma, sans-serif;font-size:12px;font-weight:bold;white-space:nowrap;'>El registro fue eliminado correctamente</span></td>";
echo"</tr>";

echo"</tbody>";
echo"</table>";
//etiqueta de html que sirve para redireccionar automáticamente en los segundos que ud quiera
echo"<meta http-equiv='refresh' content='2;URL=CGoficina.php?'/>";



}
echo "</table>";
echo "</form>";
?>
</form>
</div>
</body>
</html>