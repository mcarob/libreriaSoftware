<form autocomplete="off" id="formNuevoPresentacion" action="" method="POST">
    <!--    esto es algo comentado--->

    <div class="wizard-card">
        <br>
        <br>
        <div class="wizard-card">
            <div class="picture-container">
                <div class="picture">
                    <img src="assetsCliente/images/logo/logo.png" class="picture-src" id="wizardPicturePreview3" title="" />
                    <input type="file" id="portadaPo" name="portadaPo" required>
                </div>
                <h6>Elegir portada</h6>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Titulo de la ponencia:</label>
                    <input class="form-control" id="titulo" name="titulo">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de publicacion:</label>
                    <input type="date" class="form-control" id="fechaPublicacion" name="fechaPublicacion">
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
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre del congreso:</label>
                    <input class="form-control" id="nomCongreso" name="nomCongreso">
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

            <div class="col-md-4" aling="align-items-center">

                <div class="form-group">
                    <label>Cargar archivo</label>
                    <input type="file" class="form-control-file" id="archivoDocumentoPo" name="archivoDocumentoPo">
                </div>
            </div>

        </div>
    </div>
    <input type="number" class="form-control" id="tipo" name="tipo" value="3" hidden />
    <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
        <a onclick="agregarPresentacion();" class="btn btn-success" value="Registrar">Registrar</a>
    </div>

</form>

<script>
    function agregarPresentacion() {
        var myform = document.getElementById("formNuevoPresentacion");
        var datos = new FormData(myform);

        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar_ponencia.php",
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