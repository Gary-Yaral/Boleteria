<?php
require_once('../modelo/Usuario.php');

if($_POST['user'] && $_POST['password'] && $_POST['rol']){
    $suario = $_POST['user'];
    $contrasena = $_POST['password'];
    $rol = $_POST['rol'];
    $nuevo = new Usuario();
    $array = array($suario,$contrasena);
    $resultado = $nuevo->buscar($array)->fetchAll();
    $contador = count($resultado);
    switch($rol) {
        case 'Administrador':
            if($contador !== 0) {
                echo json_encode(array('access'=> 'administrador'));
                return;
            }
            break;
        case 'Usuario':     
            if($contador !== 0) {
                echo json_encode(array('access'=> 'user'));
                return;
            }
            break;
        default: 
    }
} else {
    echo json_encode("Error: 404");
}



?>
