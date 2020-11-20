<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPrestamoF.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/PrestamoFisico.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');

$datos=array(
    $_POST["existencias"],
    $_POST["libro"],
    $_POST["cliente"]    
);

$conDocumento=new ControladorDocumento();
$conPrestamoF=new ControladorPrestamoFisico();

$existencias=$conDocumento->buscarExistenciaXdocumento($datos[1]);
for($i=0; $i<1;$i++)
{
    $existencia=$existencias[0];
}

$prestamoF=new PrestamoFisico(null,$existencia["cod_existencia_documento"],$datos[2],1,getdate(),null);
$conPrestamoF->agregarRegistro($prestamoF);
echo($conPrestamoF->cambiarEstadoExistencia($existencia["cod_existencia_documento"]));
?>