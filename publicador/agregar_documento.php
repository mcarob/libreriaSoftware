<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/Entidades/Documento.php');
print_r($_POST);

$libro=array(
    $_POST["titulo"],
    $_POST["fechaPublicacion"],
    $_POST["editorial"],  
    $_POST["isbn"],
    $_POST["nomCongreso"]
     
);

$articulo=array(
    $_POST["titulo"],
    $_POST["fechaPublicacion"],
    $_POST["ssn"]
);

$ponencia=array(
    $_POST["titulo"],
    $_POST["fechaPublicacion"],
    $_POST["ssn"]
);



?>