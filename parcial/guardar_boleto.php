<?php

if(isset($_POST)) {
    date_default_timezone_set('America/Guayaquil');
    $fecha_actual = strval(date('Y').'-'.date('m').'-'.date('d'));
    $hora_actual = strftime("%H:%M");

    $pasajero = $_POST['pasajero'];
    $destino = $_POST['destino'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $valor = $_POST['valor'];
    $asiento = $_POST['asiento'];
    $horario = $_POST['id_horario'];
    $cedula = "";
   /*  echo json_encode($_POST);
    return; */
    if($pasajero == "1") {
        $cedula ="9999999999";
    } 

    if($pasajero == "2") {
        $cedula = intval($_POST['cedula']);
    }


    $con = mysqli_connect("localhost","root","","boletos"); 
    $table = "cliente"; 
    $sql = "SELECT * FROM $table WHERE cedula ='$cedula'";
    $resultado = $con->query($sql);
    $id_cliente = $resultado->fetch_assoc();
    $id_cliente = $id_cliente['id_cliente'];
    $cliente_existe = mysqli_num_rows($resultado);
    $agregado = false;

    if($cliente_existe < 1) {
        $sql1 = "INSERT INTO cliente(cedula, nombres, apellidos, telefono, direccion, correo) VALUES('$cedula','$nombres','$apellidos','$telefono',' ','$email')";
        $agregado = $con->query($sql1);
        $table = "cliente"; 
        $sql = "SELECT * FROM $table WHERE cedula ='$cedula'";
        $resultado = $con->query($sql);
        $id_cliente = $resultado->fetch_assoc();
        $id_cliente = $id_cliente['id_cliente'];
    }

    if($agregado){
        $sql2 = "INSERT INTO boleto(id_horario, id_cliente, id_vendedor, num_boleto, fecha, valor, n_asiento, hora) VALUES('$horario','$id_cliente','1','$asiento','$fecha_actual','$valor', '$asiento','$hora_actual')";
        $insertar1 = $con->query($sql2);
        echo json_encode($insertar1); 
        return;
    }

    $sql2 = "INSERT INTO boleto(id_horario, id_cliente, id_vendedor, num_boleto, fecha, valor, n_asiento, hora) VALUES('$horario','$id_cliente','1','$asiento','$fecha_actual','$valor', '$asiento','$hora_actual')";
    $insertar1 = $con->query($sql2);
    echo json_encode($insertar1); 
    return;

}

?>