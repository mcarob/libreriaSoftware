<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/Entidades/Documento.php');
print_r($_POST);
$datos=array(


    $_POST["titulo"],
    $_POST["fechaPublicacion"],
    $_POST["editorial"],
    $_POST["isbn"],
    $_POST["informacion_paginas"],    
);
$tipo;
if($_POST["tipo"] == 1)
{
    $tipo = $_POST["tipo"];
}
$controlador = new ControladorDocumento();
$documento = new Documento(0,1,$tipo,1,$datos[0],                                 
                                 $datos[1],$datos[2],$datos[3],
                                 $datos[4]," "," "," ","direccion archivo",1,null);

echo($controlador->agregarRegistro($documento));

?>