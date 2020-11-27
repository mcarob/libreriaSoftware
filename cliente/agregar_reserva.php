<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPrestamoF.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPeticionD.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/PrestamoFisico.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');



$documento=array(
    $_POST["cliente"],
    $_POST["idDocumento"],
    $_POST["presentacion"],
    $_POST["existencia"]
);

$conDocumento=new ControladorDocumento();
$conPrestamoF=new ControladorPrestamoFisico();
$conPeticionD=new ControladorPeticionDigital();



    if($documento[2]=="Digital")
    {   
        
        $existencias=$conDocumento->buscarExistenciaXdocumento($documento[1]);
        for($i=0; $i<1;$i++)
        {
            $existencia=$existencias[0];
        }

        $peticion=new Peticion_digital(null,$existencia["cod_existencia_documento"],$documento[0],null);
        echo($conPeticionD->agregarRegistro($peticion));
        

        $file=$_POST["documentoD"];
        $file2=implode("",$file);
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=modelos.pdf");

        echo $file2;
    }
    
    else if($documento[2]=="Física")
    {
        
        if($documento[3]>0)
        {
            $existencias=$conDocumento->buscarExistenciaXdocumento($documento[1]);
            for($i=0; $i<1;$i++)
            {
                $existencia=$existencias[0];
            }

            $prestamoF=new PrestamoFisico(null,$existencia["cod_existencia_documento"],$documento[0],1,getdate(),1);
            $conPrestamoF->agregarRegistro($prestamoF);
            echo($conPrestamoF->cambiarEstadoExistencia($existencia["cod_existencia_documento"]));
        }else{
            $existencias=$conDocumento->buscarExistenciaXdocumento2($documento[1]);
            for($i=0; $i<1;$i++)
            {
                $existencia=$existencias[0];
            }

            $prestamoF=new PrestamoFisico(null,$existencia["cod_existencia_documento"],$documento[0],3,getdate(),0);
            echo($conPrestamoF->agregarEspera($prestamoF));
        }
        
    }

?>