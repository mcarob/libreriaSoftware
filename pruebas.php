<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');

try {
    $claseCon = new DB();
    $con = $claseCon->connect();
    $sentencia = $con->prepare("select * from tipo_usuario");
    $respuesta = $sentencia->execute([]);
    $aa=($sentencia->fetchall());
    if ($respuesta == 1) {
        echo ("todo salio muy bien");
    }
    print_r($aa);
} catch (\Throwable $th) {
    print("ERROR EN LA INTEGRIDAD DE LA BASE DE DATOS");
    print($th);
}




?>