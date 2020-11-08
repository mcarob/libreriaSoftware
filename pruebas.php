<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/daos/DaoUsuario.php');

try {

    $daoUsu = new DaoUsuario();
    $resultado = $daoUsu->listar();
    print_r($resultado);
} catch (\Throwable $th) {
    print("ERROR EN LA INTEGRIDAD DE LA BASE DE DATOS");
    print($th);
}




?>