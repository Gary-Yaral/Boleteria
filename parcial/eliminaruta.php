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
    <a href="formulario ruta.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar ruta.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGruta.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
@$id_ruta=$_REQUEST["id_ruta"];

// por primera vez presionado=0 
@$Presionado=$_REQUEST["Presionado"];
?>

<form class="form-buscar" name='formulario' method='post' action='eliminaruta.php?Presionado=si&id_ruta=<?php echo $id_ruta ?>'>

<?php
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = 'ruta'; 

if (strlen(@$Presionado)==0){
?>
  <aside class="titulo-modal">
    <strong>¿Desea eliminar esta ruta?</strong>
</aside>
  <div>
    <a class="edit-cancelar" href=CGruta.php Title=Cancelar>Cancelar</a>
    <input type=submit value='Eliminar' name=Submit alt='Eliminar'>
  </div>
<?php

}

if (strlen(@$Presionado)==2){
  $sql = "DELETE FROM $table WHERE id_ruta='$id_ruta'";
  $resultado = $con->query($sql);
  if($resultado == 1) {
?>  <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Ruta eliminada</section>
    <meta http-equiv='refresh' content='1;URL=CGruta.php?'/>
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

