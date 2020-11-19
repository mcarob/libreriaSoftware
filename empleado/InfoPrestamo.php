<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
$CCliente = new ControladorCliente();
$user = $_GET['correo'];
$usuario = $CCliente->devolverClientexUser($user);

?>

<div class="col-lg-6">
    <div class="form-group">
        <label for="lastName">Nombre Usuario</label>
        <input type="text" class="form-control" readonly value="<?php echo $usuario->getNom_cliente() ?>">
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group mb-4">
        <label for="userName">Dirección Usuario</label>
        <input type="text" class="form-control" readonly value="<?php echo $usuario->getDireccion_cliente() ?>">
    </div>
</div>


<div class="col-lg-6">
    <div class="form-group mb-4">
        <label for="Birthday">Teléfono Usuario</label>
        <input type="text" class="form-control" readonly value="<?php echo $usuario->getTelefono_cliente() ?>">
    </div>
</div>