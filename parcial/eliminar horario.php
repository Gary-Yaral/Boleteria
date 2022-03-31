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
$horallegada=$_REQUEST["horallegada"];
// por primera vez presionado=0 
echo "<form name=formulario method=post action=eliminarhorario.php?Presionado=si&horallegada=".$horallegada.">";

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);
  
  
  
//busqueda si esa cédula todavía existe
$result = mysql_query("SELECT * FROM horario Where (placa=".$horallegada.") ", $link); 
$row = mysql_num_rows($result);

echo("<br><br>");

echo "<center>";


if (strlen(@$Presionado)==0)
{
echo"<table  border='1' cellspacing='0' cellpadding='0' style='width:300px;'>";
echo"<tr>";
echo"<td>";
echo"<center>Eliminar horario</center>";
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
<br>¿Esta seguro de eliminar esta horario?</td>";
echo"</tr>";
echo"<td colspan='2'>";
echo"<center>";
echo"<a href=CGhorario.php Title=Cancelar>Cancelar</a>";
echo"<input type=submit value='Eliminar' name=Submit alt='Eliminar'>";
echo"</center>";
echo"</td>";
echo"</tbody>";
echo"</table>";
//nuevo

}

if (strlen(@$Presionado)==2){

$result = mysql_query("DELETE FROM horario WHERE horallegada='$horallegada' ", $link); 
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
echo"<meta http-equiv='refresh' content='2;URL=CGhorario.php?'/>";



}
echo "</table>";
echo "</form>";
?>
</form>
</div>
</body>
</html>