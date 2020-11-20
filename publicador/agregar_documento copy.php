<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/Entidades/Documento.php');


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


if (isset($_POST["REM"])) {
    // validaciones de registro empresa y registro como tal 
    
    if (isset($_FILES['archivoDocumento'])) {
        if (($_FILES['archivoDocumento']['type']) == 'application/pdf') {
            if (((($_FILES['portada']['type']) == 'image/png') || (($_FILES['portada']['type']) == 'image/jpeg'))) {
                try {
                    $datadocumento = $_FILES['archivoDocumento']['tmp_name'];
                    $dataportada = ($_FILES['portada']['tmp_name']);
                    if (($datadocumento == null)) {
                        echo ("Error al cargar el archivo del llibro");
                    } else {
                        $archidocumento = file_get_contents($datadocumento);
                    }
                    if (($dataportada == null)) {
                        echo ("Error al cargar el archivo");
                    } else {
                        $archiportada = file_get_contents($dataportada);
                    }
                } catch (Exception $e) {
                    echo ("Error en los archivos, verificar");
                }

                if (isset($archiportada) and isset($archidocumento)) {
    
                    if($error==0){
                       // registrar empresa, paso las validaciones
                       /* ni_empresa ,nombre ,ccmpdf ,descripccion,logo,telefono,correo ,nomc,apellc ,telc,cargoc,correoc ,userempresa , passw ) */
                        $documento = ($_FILES['archivoDocumento']['tmp_name']);
                        $pnameD = rand(1000,10000)."-".$_FILES["archivoDocumento"]["name"];
                        $tnameD = $_FILES["archivoDocumento"]["tmp_name"];
                        $uploads_dir_doc = $_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/archivos/documentos';
                        $seMovioDoc=move_uploaded_file($tnameD, $uploads_dir_doc.'/'.$pnameD);

                        //portada
                        $portada = ($_FILES['portada']['tmp_name']);
                        $pnameP = rand(1000,10000)."-".$_FILES["portada"]["name"];
                        $tnameP = $_FILES["portada"]["tmp_name"];
                        $uploads_dir_por = $_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/archivos/portadas';
                        $seMovioPor=move_uploaded_file($tnameP, $uploads_dir_por.'/'.$pnameP);
                       
                        $enviar=([   $_POST['nitE'],
                                    $_POST['nombreE'],
                                    $pnameD,
                                    $_POST['descE'],
                                    $logoarchi,
                                    $_POST['telE'],
                                    $_POST['emailE'],
                                    $_POST['nomC'],
                                    $_POST['apeC'],
                                    $_POST['telC'],
                                    $_POST['cargoC'],
                                    $_POST['emailC'],
                                    $_POST['emailE'],
                                    $passmd5
                       ]);
                       if($seMovioDoc and $seMovioPor){
                           echo($variable->registrarEmpresa($enviar));
                       }else{
                           echo("error en la carga de archivos por favor vuelva a intentarlo");
                       }
                    }
                }
            } else {
                echo ("La portada tiene que ser extensión jpeg/jpg/png");
            }
        } else {
            echo ("El archivo del documento no es PDF");
        }

    }
}


?>