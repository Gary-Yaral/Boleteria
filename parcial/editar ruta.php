<?php 
$placa=$_REQUEST["placa"];
// por primera vez presionado=0 
echo "<form name=formulario method=post action=editar.php?Presionado=si&nombre=".$nombre.">";

//conectar a la bd
  $link = mysql_connect("localhost","root",""); 
  mysql_select_db("boletos", $link);
  
$resultado=mysql_query("select * from oficina where nombre='$nombre'",$link);
$row=mysql_num_rows($resultado);


	  // $cedula=mysql_result($resultado,0,"cedula");
	  $nombre=mysql_result($resultado,0,"nombre");
	   	   $direccion=mysql_result($resultado,0,"direccion");
	   	   $telefono=mysql_result($resultado,0,"telefono");
			   	   $correo=mysql_result($resultado,0,"correo");		    


echo"
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
";

	




/*
if (strlen(@$Presionado)==0)
{
echo"<table  border='1' cellspacing='0' cellpadding='0' style='width:300px;'>";
echo"<tr>";
echo"<td>";
echo"<center>Eliminar Persona</center>";
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
<br>¿Esta seguro de eliminar esta persona?</td>";
echo"</tr>";
echo"<td colspan='2'>";
echo"<center>";
echo"<a href=consultageneral2.php Title=Cancelar>Cancelar</a>";
echo"<input type=submit value='Eliminar' name=Submit alt='Eliminar'>";
echo"</center>";
echo"</td>";
echo"</tbody>";
echo"</table>";
//nuevo

}*/

if (strlen(@$Presionado)==2){

$result = mysql_query("DELETE FROM personas WHERE cedula='$cedula' ", $link); 
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
echo"<meta http-equiv='refresh' content='2;URL=consultageneral2.php?'/>";



}
echo "</table>";
echo "</form>";
?>
</form>
</div>
</body>
</html>