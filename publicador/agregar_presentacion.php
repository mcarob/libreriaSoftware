<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/Entidades/Documento.php');
print_r($_POST);
$datos=array(


    $_POST["titulo"],
    $_POST["fechaPublicacion"],
    $_POST["editorial"],  
    #$_POST["autor"],
    $_POST["isbn"],
    $_POST["nomCongreso"]
     
);
$tipo;
if($_POST["tipo"] == 3)
{
    $tipo = $_POST["tipo"];
}
$controlador = new ControladorDocumento();
$documento = new Documento(0,1,$tipo,2,$datos[0],                                 
                                 $datos[1],$datos[2],$datos[3],
                                 2,$datos[4],2,2,"direccion archivo",1,"ruta");

echo($controlador->agregarRegistro($documento));

?>