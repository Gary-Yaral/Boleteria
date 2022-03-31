<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Boletería  | Ingreso</title>
</head>
<body>
    <div class="container">
<?php
echo"<br>";
@$usuario=$_REQUEST["usuario"];
$con = mysqli_connect("localhost","root","","boletos");
$table = "usuarios"; 
$sql = "select * from $table where usuario='$usuario'";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);
$nombreusuario = "";

if($filas > 0){
    $nombreusuario = $usuario;
}

?>
<div class="username">
        <?php echo "Usuario: ".$nombreusuario; ?>
</div>
    <ul>
        <div class="title-ul">MENÚ</div>
	    <li>
			<a href='CGbus.php' target='contenedor' class='active'><span class='l'></span><span class='r'></span><span class='t'>Buses</span></a>
		</li>	
		<li>
			<a href='CGcliente.php' target='contenedor' ><span class='l'></span><span class='r'></span><span class='t'>Clientes</span></a>
		</li>
		<li>
			<a href='CGruta.php' target='contenedor' ><span class='l'></span><span class='r'></span><span class='t'>Rutas</span></a>
		</li>
		<li>
			<a href='CGhorario.php' target='contenedor' ><span class='l'></span><span class='r'></span><span class='t'>Horarios</span></a>
		</li>
		<li>
			<a href='CGoficina.php' target='contenedor' ><span class='l'></span><span class='r'></span><span class='t'>Oficinas</span></a>
		</li>
		<li>
			<a href='CGboleto.php' target='contenedor' ><span class='l'></span><span class='r'></span><span class='t'>Boleto</span></a>
		</li>
		<li>
			<a href='index.php?Presionado=no'><span class='l'></span><span class='r'></span><span class='t'>Salir</span></a>
		</li>	
	</ul>          
<iframe src='' border='5' frameborder='15' framespacing='0' width='850' height='650' name='contenedor'></iframe>  

</div>

</body>
</html>
