<?php

    if(isset($_POST['horario'])){
        date_default_timezone_set('America/Guayaquil');
        $fecha_actual = strval(date('Y').'-'.date('m').'-'.date('d'));
        $hora_actual = strftime("%H:%M");
        $horario =  strval($_POST['horario']);
        $con = mysqli_connect("localhost","root","","boletos"); 
        $table = "boleto"; 
        $sql = "SELECT * FROM $table WHERE id_horario = '$horario' and fecha = '$fecha_actual'";
        $resultado = $con->query($sql);
    
        $filas = mysqli_num_rows($resultado);

        $table1 = "horario";
        $sql1 = "SELECT * FROM $table1 WHERE id_horario = '$horario' ";
        $resultado1 = $con->query($sql1);
        $resultado1 = $resultado1->fetch_assoc();
        $id_ruta=  $resultado1['id_ruta'];
        $id_bus=  $resultado1['id_bus']; 
        $hora_salida = $resultado1['hora_salida'];

        $table2 = "bus";
        $sql2 = "SELECT * FROM $table2 WHERE id_bus = '$id_bus'";
        $resultado2 = $con->query($sql2);
        $capacidad = $resultado2->fetch_assoc(); 
        $asientos = intval($capacidad['capacidad']);

        $table3 = "ruta";
        $sql3 = "SELECT * FROM $table3 WHERE id_ruta = '$id_ruta'";
        $resultado3 = $con->query($sql3);
        $ruta = $resultado3->fetch_assoc(); 
        $valor = $ruta['valor'];
        $destino = $ruta['destino'];


        if($filas >= $asientos) {
            echo json_encode(array("mensaje" => "Boletos Agotados"));
            return;
        }

        //Si no hay boletos generados aùn para ese horario
        if($filas == 0) {
            $array = array("next" => 1, "bus"=>$id_bus, "destino"=> $destino, "valor" =>$valor, "salida"=> $hora_salida, "horario" => $horario);
            echo json_encode($array);
            return;
        } 

        if($filas > 0) {
            $array = array("next" =>$filas + 1, "bus"=>$id_bus, "destino"=> $destino, "valor" =>$valor, "salida"=> $hora_salida, "horario" => $horario);
            echo json_encode($array);
            return;
        } 
        
        // Si hay boletos ya generados
        echo json_encode($filas);
    }
?>