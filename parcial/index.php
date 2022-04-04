<?php 
  @$presionado=$_REQUEST["Presionado"];
  @$usuario=$_REQUEST["usuario"];
  @$clave=$_REQUEST["clave"];
  @$rol =$_REQUEST["rol"];
?>


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
    <div class="login-container">
      <img class="fondo" src="imagenes/fondo.jpg" alt="imagen">
      <div class="form-container">
        <img class="bus" src="imagenes/bus.png" alt="bus.png">
        <h2 class="title-index">Boletería Caluma</h2>
        <form method='post' action="index.php?Presionado=si" class="form">
            <h3 class="title-form">Iniciar sesión</h3>
            <input type="text" name="usuario" class="user" placeholder="usuario" value="<?php echo $usuario?>">
            <input type="password" name="clave" class="password" placeholder="contraseña" value="<?php echo $clave?>">
            <select name="rol" id="rol">
                <option value="">Seleccionar rol</option>
                <option <?php if($rol === "1") echo "selected";?> value="1">Usuario</option>
                <option <?php if($rol === "2") echo "selected"?> value="2">Administrador</option>
            </select>
            <div class="buttons-container">
                <input type="submit" value="Ingresar">
                <input type="button" value="Cancelar" class="cancelar" name="cancelar">
            </div>
        </form>
      </div>

<?php

if($rol !== "" && $usuario != "" && $clave != ""){
  //conexion a base de datos
  $con = mysqli_connect("localhost","root","","boletos"); 
  $table = "usuarios"; 
  $sql = "select * from $table where usuario='$usuario' and clave='$clave'";
  $resultado = $con->query($sql);
  $filas = mysqli_num_rows($resultado);
  $error=1;
  ////////////////////////////////////////////////////////////
  if($filas>0 ){
    $error=0;
    @$codigousuario=$usuario;
    header("location: menu.php?usuario=".$codigousuario); 
  }


  if($presionado == "si" && $error == 1 ){
  ?>
        <div class="error">
          <h5>Usuario o contraseña incorrecto</h5>
        </div>
  <?php
  }
} else {
  if($presionado == "si") {
    ?>
        <div class="error">
          <h5>Rellene todos los campos</h5>
        </div>
  <?php
  }
}
  ?>
      <footer>
          Desarrollado por: <strong>Estudiantes </sstrong>
      </footer>
    </div>
</body>
</html>
