

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPrestamoF.php');
$CPF = new ControladorPrestamoFisico();
$id = $_GET['id'];
?>


<div class="modal-body text-center font-18">
    <h4 class="padding-top-30 mb-30 weight-500">¿Estas seguro de aceptar la devolución?</h4>
    <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
        <div class="col-6">
            <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            NO
        </div>
        <div class="col-6">
            <button type='button' class='btn btn-primary border-radius-100 btn-block confirmation-btn' data-dismiss='modal' onclick="aceptarDevo(<?php echo $id ?>)"><i class='fa fa-check'></i></button>
            SI
        </div>
    </div>
</div>

