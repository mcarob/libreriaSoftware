<form  id="formNuevoLibro" enctype="multipart/form-data" method="post"  >
    <!--    esto es algo comentado--->

    <div class="wizard-card">
    <div class="wizard-card">
        <div class="picture-container">
            <div class="picture">
                <img src="assetsCliente/images/logo/logo.png" class="picture-src" id="wizardPicturePreview" title="" />
                <input type="file" id="logo" name="logo" required>
            </div>
            <h6>Elegir Logo</h6>
        </div>
    </div>
        <div class="row">
                <div class="form-group">
                        <label >Cargar archivo</label>
                        <input type="file" class="form-control-file"  id="archivoDocumento" name = "archivoDocumento">
                </div>
        
        </div>

        <div class="row">
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Título del libro:</label>
                    <input class="form-control" id="titulo" name="titulo">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de publicación:</label>
                    <input type="date" class="form-control" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Idioma:</label>
                    <select class="custom-select" id="idioma" name="idioma">
                        <option selected>Escoger idioma...</option>
                        <option value="1">Inglés</option>
                        <option value="2">Español</option>
                        <option value="3">Portuges</option>
                        <option value="4">Alemán</option>
                        <option value="5">Frances</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>ISBN:</label>
                    <input class="form-control" id="isbn" name="isbn">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Editorial:</label>
                    <input class="form-control" id="editorial" name="editorial">
                </div>
            </div>
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Numero de Paginas:</label>
                    <input type="number" class="form-control" id="informacion_paginas" name="informacion_paginas">
                    </input>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">

                    <label class="control control-checkbox checkbox-success">Tipo de formato:</label>

                    <div class="input-group md-4">
                        <select class="custom-select" id="inputGroupSelect02">
                            <option value="1" selected>Físico</option>
                            <option value="2">Digital</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Formato</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Autores:</label>
                    <input type="text" class="form-control" id="autores" name="autores">
                    </input>
                </div>
            </div>

        </div>
        <input type="number" class="form-control" id="tipo" name="tipo" value="1" hidden />
        <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
            <a onclick="agregarLibro();" class="btn btn-success" value="Registrar">Registrar</a>
        </div>
    </div>
</form>
<script>
    function agregarLibro() {
        datos = $('#formNuevoLibro').serialize();
        var file_imagen = $("#archivoDocumento").val();
        
        $.ajax({
            type: "POST",
            data: datos,         
            url: "agregar_libro.php",
            success: function(r) {

                console.log(r);
                if (r == 1) {
                    window.location.href = "index.php";
                } else {

                }
            }
        });
    }
</script>
