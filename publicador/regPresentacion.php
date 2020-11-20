<form autocomplete="off" id="formNuevoPresentacion" action="" method="POST">
    <!--    esto es algo comentado--->

    <div class="wizard-card">
        <br>
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
            
            
        </div>
        <div class="row">
            
            <div class="col-md-4">
                
            </div>
            
        </div>
    </div>
    <input type= "number"class="form-control" id="tipo" name="tipo" value="3" hidden/>
    <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
            <a onclick="agregarPresentacion();" class="btn btn-success" value="Registrar">Registrar</a>
        </div>
   
</form>

<script>
  function agregarPresentacion() {
        datos = $('#formNuevoPresentacion').serialize();

        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar_presentacion.php",
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