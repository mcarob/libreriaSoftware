<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
$CDocumentos = new ControladorDocumento();
$id = $_GET['id'];
$libro = $CDocumentos->darDocumentoFF($id);
$fecha_actual = date("Y-m-d");
$devolucion = strtotime('+8 days', strtotime($fecha_actual));
$devolucion = date('Y-m-d', $devolucion);
?>


    <div class="modal-header px-4">
        <h3 class="modal-title" style="align-content:center;" id="exampleModalCenterTitle"><?php echo $libro['titulo_documento'] ?></h3>

    </div>
    <div class="modal-body px-4">

        <form id="dddd" method="POST">

            <div class="modal-body px-4">
                <div class="row mb-2">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="firstName">Correo usuario:</label>
                            <input type="text" required id='dd' class="form-control 1">
                            <input type="hidden" id="cod_libro" name="cod_libro" value="<?php echo $id ?>">
                            <input type="hidden" id="correo_usuario" name="correo_usuario" value="">

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class='btn-list'>
                                <br>
                                <button type='button' class='btn btn-outline-success' onclick='buscarusu()'>Buscar</button>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mb-2" id="4536">


                </div>

                <div class="row mb-2">

                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="Birthday">Fecha prestamo</label>
                            <input type="text" class="form-control" readonly value="<?php echo $fecha_actual ?>">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="Birthday">Fecha Devolución</label>
                            <input type="text" class="form-control" readonly value="<?php echo $devolucion ?>">
                        </div>
                    </div>

                </div>


            </div>
        </form>
    </div>
    <div class="modal-footer px-4">
        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary btn-pill" id='botonAgregar' disabled onclick="agregarPrestamo()">Aceptar</button>

    </div>


<script>
    function buscarusu() {
        var x = $('#dd').val();
        var y = "../administrador/Ac.php?action=" + "buscarC&"+"correo="+x;
                
        $.ajax({
            type: "POST",
            url: y,
            success: function(r) {
                console.log(r);
				if (r == "2") {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: '¡No se ha podido encontrar!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                }else{
                    $('#4536').load('infoPrestamo.php?correo=' + x);
                    $('#correo_usuario').val(x);
                    $("#botonAgregar").attr("disabled", false);
                    
                }
            }
        });

    
    }


    function agregarPrestamo(){
        datos = $('#dddd').serialize();
        $("#botonAgregar").attr("disabled", true);
        $.ajax({
            type: "POST",
            data: datos,
            url: "../administrador/Ac.php?action=" + "reservarLxC",
            success: function(r) {
                console.log(r);
				if (r == 1) {
                    swal({
                        type: 'success',
                        title: '¡Reserva exitosa!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    document.getElementById("dddd").reset();
                    document.getElementById("prestamo").reset();
                    window.location.href="TablaLibrosF.php";

                } else {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: '¡No se ha podido agregar!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    $("#botonAgregar").attr("disabled", false);
                }
            }
        });
    }
</script>