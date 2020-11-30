<form id="formNuevoArticulo" method="POST">

    <div class="wizard-card">
        <br>
        <div class="picture-container">
            <div class="picture">
                <img src="assetsCliente/images/icons/default-avatar1.png" class="picture-src" id="wizardPicturePreview" title="" />
                <input type="file" id="portada" name="portada" required>
            </div>
            <h6>Elegir portada del titulo</h6>
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Titulo del articulo:</label>
                    <input class="form-control" id="titulo" name="titulo">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de publicacion:</label>
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
            </div>
            
            <div class="row">
                <div class="col-md-4">
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