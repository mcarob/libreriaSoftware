<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Documento.php');

$tipo;
if($_POST["tipo"] == 2)
{
    $tipo = $_POST["tipo"];
}

    $documento = ($_FILES['archivoDocumentoArt']['tmp_name']);  
    if (isset($_FILES['archivoDocumentoArt'])) {
        print_r("Entro aca");
        if (($_FILES['archivoDocumentoArt']['type']) == 'application/pdf') {
            print_r("Entro aca 2");
            if ((($_FILES['archivoDocumentoArt']['type']) == 'application/pdf') || (($_FILES['portadaArt']['type']) == 'image/jpeg')) {
                print_r("Entro aca 3");
                try {
                    $datadocumento = $_FILES['archivoDocumentoArt']['tmp_name'];
                    $dataportada = ($_FILES['portadaArt']['tmp_name']);
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
                        $documento = ($_FILES['archivoDocumentoArt']['tmp_name']);
                        $pnameD = rand(1000,10000)."-".$_FILES["archivoDocumentoArt"]["name"];
                        $tnameD = $_FILES["archivoDocumentoArt"]["tmp_name"];
                        $uploads_dir_doc = $_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/archivos/documentos';
                        $seMovioDoc=move_uploaded_file($tnameD, $uploads_dir_doc.'/'.$pnameD);

                        //portada
                        $portada = ($_FILES['portadaArt']['tmp_name']);
                        $pnameP = rand(1000,10000)."-".$_FILES["portadaArt"]["name"];
                        $tnameP = $_FILES["portadaArt"]["tmp_name"];
                        $uploads_dir_por = $_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/archivos/portadas';
                        $seMovioPor=move_uploaded_file($tnameP, $uploads_dir_por.'/'.$pnameP);
                       
                        $datos=([ 
                            $_POST["titulo"],
                            $_POST["fechaPublicacion"],
                            $_POST["editorial"],
                            $_POST["ssn"],
                            $_POST["idioma"],                           
                            $pnameD,
                            $pnameP
                       ]);
                      
                        print_r("Entro");
                        $controlador = new ControladorDocumento();
                        $documento = new Documento(0,$datos[4],$tipo,2,$datos[0],                                 
                                                         $datos[1],$datos[2],"",
                                                         ""," ",$datos[3]," ",$pnameD,1,$pnameP);
                        echo($controlador->agregarRegistro($documento));
                      
                    
                
            } else {
                echo ("La portada tiene que ser extensión jpeg/jpg/png");
            }
        } else {
            echo ("El archivo del documento no es PDF");
        }

    }



?>