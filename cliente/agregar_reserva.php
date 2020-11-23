<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPrestamoF.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPeticonD.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/PrestamoFisico.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');



$documento=array(
    $_POST["cliente"],
    $_POST["idDocumento"],
    $_POST["presentacion"],
    $_POST["existencias"]
);


$conDocumento=new ControladorDocumento();
$conPrestamoF=new ControladorPrestamoFisico();
$conPeticionD=new ControladorPeticionDigital();

    if($documento[2]=="Digital")
    {   
        $existencias=$conDocumento->buscarExistenciaXdocumento($datos[1]);
        for($i=0; $i<1;$i++)
        {
            $existencia=$existencias[0];
        }

        echo( $peticion=new Peticion_digital(null,$existencia["cod_existencia_documento"],$datos[0],null) ) ;
        
    }
    
    else if($documento[2]=="Física")
    {
        if($documento[3]>0)
        {
            $existencias=$conDocumento->buscarExistenciaXdocumento($datos[1]);
            for($i=0; $i<1;$i++)
            {
                $existencia=$existencias[0];
            }

            $prestamoF=new PrestamoFisico(null,$existencia["cod_existencia_documento"],$datos[0],1,getdate(),null);
            $conPrestamoF->agregarRegistro($prestamoF);
            echo($conPrestamoF->cambiarEstadoExistencia($existencia["cod_existencia_documento"]));
        }else{
            $prestamoF=new PrestamoFisico(null,$existencia["cod_existencia_documento"],$datos[0],3,getdate(),null);
            $conPrestamoF->agregarRegistro($prestamoF);
        }
        
    }

?>