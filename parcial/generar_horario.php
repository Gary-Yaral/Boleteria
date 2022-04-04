<?php
    if(isset($_POST['id_ruta'])){ 
    $id_ruta = $_POST['id_ruta'];
    $con = mysqli_connect("localhost","root","","boletos");
    $table = "ruta"; 
    $sql = "select * from $table where id_ruta=$id_ruta";
    $resultado = $con->query($sql);
    $resultado = $resultado ->fetch_assoc();
    echo json_encode($resultado);
    } else {
        echo json_encode('error');
    }


?>