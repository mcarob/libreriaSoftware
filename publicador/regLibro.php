<form id="formNuevoLibro" method="post">
    <!--    esto es algo comentado--->

    <div class="wizard-card">
        <div class="wizard-card">
            <div class="picture-container">
                <div class="picture">
                    <img src="assetsCliente/images/logo/logo2.png" class="picture-src" id="wizardPicturePreview" title="" />
                    <input type="file" id="portada" name="portada" required>
                </div>
                <h6>Elegir portada</h6>
            </div>
        </div>
        <br>

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
            <div class="col-md-8" aling="align-items-center">
                <div class="form-group">
                    <div class="row">
                        <label>Autores:</label>
                    </div>
                    <select id="example-getting-started" multiple="multiple" value="Seleccionar">
                        <option value="cheese">Andres Mendonza</option>
                        <option value="tomatoes">Gabriel Garcia Marquez</option>
                        <option value="mozarella">Maquiavelo</option>
                        <option value="mushrooms">Fiodor Dostoievski</option>
                        <option value="pepperoni">Alejandro Dumas</option>
                        <option value="onions">Iam Sommerville</option>
                    </select>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-12" aling="align-items-center">
            <div class="custom-file">
            <input type="file" class="form-control-file" id="archivoDocumento" name="archivoDocumento">
                    <label class="custom-file-label" for="inputGroupFile01">Elegir Documento</label>
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
        var myform = document.getElementById("formNuevoLibro");
        var datos = new FormData(myform);

        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar_libro.php",
            processData: false,
            contentType: false,
            success: function(r) {

                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al subir doc", "Error :(");
                } else {
                    toastr["success"]("Libro agregado con exito", "Genial");
                    document.getElementById("formNuevoLibro").reset();
                }
            }
        });
    }
</script>