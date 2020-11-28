<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPeticionD.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');

$documento=array(
    $_POST["cliente"],
    $_POST["idDocumento"]
);

$conPeticionD=new ControladorPeticionDigital();
$conDocumento=new ControladorDocumento();
$existencias=$conDocumento->buscarExistenciaXdocumento2($documento[1]);

    for($i=0; $i<1;$i++)
    {
        $existencia=$existencias[0];
    }

    $peticion=new Peticion_digital(null,$existencia["cod_existencia_documento"],$documento[0],null);
    $conPeticionD->agregarRegistro($peticion);
    $ruta="../archivos/documentos/".$_POST["rutaDoc"];
    $file = $ruta;
    $fp = fopen($file, "r") ;

    header("Cache-Control: maxage=1");
    header("Pragma: public");
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$_POST["rutaDoc"]."");
    header("Content-Description: PHP Generated Data");
    header("Content-Transfer-Encoding: binary");
    header('Content-Length:' . filesize($file));
    ob_clean();
    flush();
    while (!feof($fp)) {
        $buff = fread($fp, 1024);
        print $buff;
    }
?>