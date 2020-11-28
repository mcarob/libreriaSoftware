<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPeticionD.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
$conPeticionD=new ControladorPeticionDigital();
$conDocumento=new ControladorDocumento();
$existencias=$conDocumento->buscarExistenciaXdocumento($documento[1]);

$documento=array(
    $_POST["cliente"],
    $_POST["idDocumento"]
);

for($i=0; $i<1;$i++)
{
    $existencia=$existencias[0];
}

$peticion=new Peticion_digital(null,$existencia["cod_existencia_documento"],$documento[0],null);
$conPeticionD->agregarRegistro($peticion);

$ruta="../archivos/documentos/modelos.pdf";
$file=file($ruta);
$file2=implode("",$file);
$decom=explode( '/', $ruta );
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$decom[3]);
echo $file2;
?>