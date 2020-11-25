<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Documento.php');

$tipo;
if($_POST["tipo"] == 1)
{
    $tipo = $_POST["tipo"];
}
    print_r($_FILES);
    $tmp=$_FILES['archivoDocumento']['tmp_name'];
    print_r($tmp);
    // validaciones de registro empresa y registro como tal 
    print_r($_POST);
    $documento = ($_FILES['archivoDocumento']['tmp_name']);  
    if (isset($_FILES['archivoDocumento'])) {
        if (($_FILES['archivoDocumento']['type']) == 'application/pdf') {
            
            if ((($_FILES['archivoDocumento']['type']) == 'application/pdf') || (($_FILES['portada']['type']) == 'image/jpeg')) {
                try {
                    $datadocumento = $_FILES['archivoDocumento']['tmp_name'];
                    $dataportada = ($_FILES['portada']['tmp_name']);
                    if (($datadocumento == null)) {
                        echo ("Error al cargar el archivo del llibro");
                    } else {
                        $archidocumento = file_get_contents($datadocumento);
                        print_r($archidocumento);
                    }
                    if (($dataportada == null)) {
                        echo ("Error al cargar el archivo");
                    } else {
                        $archiportada = file_get_contents($dataportada);
                    }
                } catch (Exception $e) {
                    echo ("Error en los archivos, verificar");
                }

               
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
                       
                        $datos=([ 
                            $_POST["titulo"],
                            $_POST["fechaPublicacion"],
                            $_POST["editorial"],
                            $_POST["isbn"],
                            $_POST["informacion_paginas"],
                            $_POST["idioma"],                           
                            $tnameD,
                            $tnameP
                       ]);
                       echo($datos);
                       if($seMovioDoc and $seMovioPor){
                        $controlador = new ControladorDocumento();
                        echo($datos);
                        $documento = new Documento(0,$datos[5],$tipo,1,$datos[0],                                 
                                                         $datos[1],$datos[2],$datos[3],
                                                         $datos[4]," "," "," ",$tnameD,1,$tnameP);
                        echo($controlador->agregarRegistro($enviar));
                       }else{
                           echo("error en la carga de archivos por favor vuelva a intentarlo");
                       }
                    
                
            } else {
                echo ("La portada tiene que ser extensión jpeg/jpg/png");
            }
        } else {
            echo ("El archivo del documento no es PDF");
        }

    }



?>