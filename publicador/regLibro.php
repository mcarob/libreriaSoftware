<form autocomplete="off" id="formNuevoLibro">
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
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Titulo del libro:</label>
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
            <div class="form-group">

                    <label class="control control-checkbox checkbox-success">Tipo de formato:</label>

                    <div class="input-group md-4">
                        <select class="custom-select" id="inputGroupSelect02">
                            <option value="1" selected>Físico</option>
                            <option value="2">Digital</option>
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
                    <input type= "number"class="form-control" id="informacion_paginas" name="informacion_paginas">
                    </input>
                </div>
            </div>
    
        </div>

        <input type= "number"class="form-control" id="tipo" name="tipo" value="1" hidden/>
        <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
            <a onclick="agregarLibro();" class="btn btn-primary btn-default" value="Registrar">Registrar</a>
        </div>
    </div>
</form>

<script>
  function agregarLibro() {
        datos = $('#formNuevoLibro').serialize();

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