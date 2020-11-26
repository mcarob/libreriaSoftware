<form autocomplete="off" id="formNuevoArticulo" action="" method="POST">
    <!--    esto es algo comentado--->

    <div class="wizard-card">
        <br>
        <br>
        <div class="picture-container">
            <div class="picture">
                <img src="assetsCliente/images/icons/default-avatar1.png" class="picture-src" id="wizardPicturePreview" title="" />
                <input type="file" id="portada2" name="portada" required>
            </div>
            <h6>Elegir portada del título</h6>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Cargar</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="archivoDocumento">
                    <label class="custom-file-label" for="inputGroupFile01">Elegir Documento</label>
        <div class="wizard-card">
            <div class="picture-container">
                <div class="picture">
                    <img src="assetsCliente/images/logo/logo.png" class="picture-src" id="wizardPicturePreview2" title="" />
                    <input type="file" id="portadaArt" name="portadaArt" required>
                </div>
                <h6>Elegir portada</h6>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Título del articulo:</label>
                    <input class="form-control" id="titulo" name="titulo">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de publicación:</label>
                    <input class="form-control" type="date" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Autor:</label>
                    <input class="form-control" id="autor" name="autor">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>SSN:</label>
                    <input class="form-control" id="ssn" name="ssn">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label> Editorial:</label>
                    <input class="form-control" id="editorial" name="editorial">
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Cargar archivo</label>
                        <input type="file" class="form-control-file" id="archivoDocumentoArt" name="archivoDocumentoArt">
                    </div>

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
        <input type="number" class="form-control" id="tipo" name="tipo" value="2" hidden />
        <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
            <a onclick="agregarArticulo();" class="btn btn-success" value="Registrar">Registrar</a>
        </div>
    </div>
</form>

<script>
    function agregarArticulo() {
        var myform = document.getElementById("formNuevoArticulo");
        var datos = new FormData(myform);

        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar_articulo.php",
            processData: false,
            contentType: false,
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