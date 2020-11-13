<form autocomplete="off" id="formNuevoLibro" action="" method="POST">
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
                    <label>Titulo del articulo:</label>
                    <input class="form-control" id="titulo" name="titulo">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de publicacion:</label>
                    <input class="form-control" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Autor:</label>
                    <input class="form-control" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>SSN:</label>
                    <input class="form-control" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Mes de publicacion:</label>
                    <input class="form-control" id="fechaPublicacion" name="fechaPublicacion">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Dia de publicacion:</label>
                    <input class="form-control" id="fechaPublicacion" name="fechaPublicacion">
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
        </div>
    </div>
    <div class="form-footer " style="float: right;">
        <input type="submit" class="btn btn-primary btn-default" value="Registrar"></input>
    </div>
</form>