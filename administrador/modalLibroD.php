<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
$CDocumentos = new ControladorDocumento();
$id = $_GET['id'];
$libro = $CDocumentos->darDocumentoDD($id)
?>


<form>
    <div class="modal-header px-4" >
        <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle"><?php echo $libro['titulo_documento']?></h3>
        
    </div>
    <div class="modal-body px-4">

        <form>
           
            <div class="modal-body px-4">
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="firstName">Fecha de publicación</label>
                        <input type="text" class="form-control" id="firstName" readonly value="<?php echo $libro['fecha_publicacion'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="lastName">Publicador</label>
                        <input type="text" class="form-control" readonly value="<?php echo $libro['nom_publicador'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="userName">Editorial</label>
                        <input type="text" class="form-control" readonly value="<?php echo $libro['editorial_publicacion'] ?>">
                    </div>
                </div>

                
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Tipo de documento</label>
                        <input type="text" class="form-control" readonly value="<?php echo $libro['nom_tipo_documento'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Idioma</label>
                        <input type="text" class="form-control" readonly value="<?php echo $libro['nom_idioma'] ?>">
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Número de páginas</label>
                        <input type="text" class="form-control" readonly value="<?php echo $libro['informacion_paginas'] ?>">
                    </div>
                </div>

                
            </div>
            </div>
            <div class="modal-footer px-4">
                <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cerrar</button>
            </div>
        </form>