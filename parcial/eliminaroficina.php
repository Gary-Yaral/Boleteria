<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/results.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<body>
	<div class="opciones">
    <a href="formulario oficina.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar oficina.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGoficina.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
@$id_oficina=$_REQUEST["id_oficina"];
// por primera vez presionado=0 
@$Presionado=$_REQUEST["Presionado"];
?>

<form class="form-buscar" name='formulario' method='post' action='eliminaroficina.php?Presionado=si&id_oficina=<?php echo $id_oficina ?>'>

<?php
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "oficina"; 

if (strlen(@$Presionado)==0){
?>
  <aside class="titulo-modal">
    <strong>¿Desea eliminar esta oficina?</strong>
</aside>
  <div>
    <a class="edit-cancelar" href=CGoficina.php Title=Cancelar>Cancelar</a>
    <input type=submit value='Eliminar' name=Submit alt='Eliminar'>
  </div>
<?php

}

if (strlen(@$Presionado)==2){
  $sql = "DELETE FROM $table where id_oficina=$id_oficina";
  $resultado = $con->query($sql);
  if($resultado == 1) {
?>  <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Oficina eliminada</section>
    <meta http-equiv='refresh' content='1;URL=CGoficina.php?'/>
<?php
} else {
?>
    <div>No se ha podido eliminar oficina</div>
<?php
  } 
}
?> 

</form>
</body>
</html>
