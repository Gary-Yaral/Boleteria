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
    <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
    <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
    <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >¡Atención!</h1>


<?php 
$id_horario=$_REQUEST["id_horario"];
// por primera vez presionado=0 
@$Presionado=$_REQUEST["Presionado"];
?>

<form class="form-buscar" name='formulario' method='post' action='eliminar horario.php?Presionado=si&id_horario=<?php echo $id_horario ?>'>

<?php
//conectar a la bd
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 

if (strlen(@$Presionado)==0){
?>
  <aside class="titulo-modal">
    <strong>¿Desea eliminar este horario?</strong>
</aside>
  <div>
    <a class="edit-cancelar" href=CGhorario.php Title=Cancelar>Cancelar</a>
    <input type=submit value='Eliminar' name=Submit alt='Eliminar'>
  </div>
<?php

}

if (strlen(@$Presionado)==2){
  $sql = "DELETE FROM $table where id_horario= '$id_horario'";
  $resultado = $con->query($sql);
  if($resultado == 1) {
?>  <h3 class="titulo-eliminar">Resultado</h3>
    <section class="mensaje-eliminar">Horario eliminado</section>
    <meta http-equiv='refresh' content='1;URL=CGhorario.php?'/>
<?php
} else {
?>
    <section class="error-cont">No se ha podido eliminar horario</section>
    <section class="error-cont">Hay boletos generados</section>
<?php
  } 
}
?> 
