<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPrestamoF.php');
$CPF = new ControladorPrestamoFisico();
$id = $_GET['id'];
$prestamos = $CPF->DarprestamosFisicosxCodPrestamo($id);
?>


<form>
    <div class="modal-header px-4" >
        <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle"><?php echo $prestamos['titulo_documento']?></h3>
        
    </div>
    <div class="modal-body px-4">

        <form>
           
            <div class="modal-body px-4">
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="firstName">Fecha de prestamo</label>
                        <input type="text" class="form-control" id="firstName" readonly value="<?php echo $prestamos['fecha_prestamo_fisico'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="lastName">Fecha de devolución</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['fecha_devolucion_fisico'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="userName">Estado</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['nombre_estado'] ?>">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Tipo de documento</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['nom_tipo_documento'] ?>">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Código ISBN</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['codigo_isbn'] ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="userName">Usuario</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['nom_cliente'] ?>">
                    </div>
                </div>

                

                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Telefono</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['telefono_cliente'] ?>">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Dirección</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['direccion_cliente'] ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="Birthday">Correo del Usuario</label>
                        <input type="text" class="form-control" readonly value="<?php echo $prestamos['correo_cliente'] ?>">
                    </div>
                </div>

                
            </div>
            </div>
            <div class="modal-footer px-4">
                <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cerrar</button>
            </div>
        </form>