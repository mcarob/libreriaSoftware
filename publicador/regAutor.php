<form id="formNuevoAutor" method="post">
    <!--    esto es algo comentado--->

    <div class="wizard-card">
        <div class="row">
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Nombre autor:</label>
                    <input class="form-control" id="nAutor" name="nAutor">
                    </input>
                </div>
            </div>
            <div class="col-md-4" aling="align-items-center">
                <div class="form-group">
                    <label>Apellido autor:</label>
                    <input class="form-control" id="aAutor" name="aAutor">
                    </input>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha de nacimiento:</label>
                    <input type="date" class="form-control" id="nacimiento" name="nacimiento">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">                
                <div class="form-group">
                    <label >Biografia:</label>
                    <textarea class="form-control" id="biografia" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="form-footer pt-4 pt-5 mt-4" style="float: center;">
            <a onclick="agregarAutor();" class="btn btn-success" value="Registrar">Registrar</a>
        </div>
    </div>
</form>
<script>
    function agregarAutor() {
        datos = $('#formNuevoAutor').serialize();

        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar_autor.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al subir autor", "Error :(");
                } else {
                    toastr["success"]("Autor agregado con exito", "Genial");
                    document.getElementById("formNuevoAutor").reset();
                }
            }
        });
    }
</script>