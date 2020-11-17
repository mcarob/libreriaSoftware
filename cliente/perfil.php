<!DOCTYPE html>
<?php
include("header.php");
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/ClienteDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorUsuario.php');

session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 4) {
    header("location: ../index.php");
}

$usuario=new ControladorUsuario();
$usuario->setUser($_SESSION['user']);
$codigo=$usuario->getCodigo();

$controladorCliente=new ControladorCliente();
$cliente=$controladorCliente->devolverCliente($codigo);
?>

<head>
    <title>Editar perfil</title>
    <link href="formulario/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Editar Perfil</h2>
                    <form method="POST" action="javascript:editarPerfil()" id="editarPerfil">
                    <input type="hidden" class="form-control" id="cod_usuario" name="cod_usuario" value="<?php echo ($codigo) ?>">
                    <input type="hidden" class="form-control" id="habilitado" name="habilitado" value="<?php echo ($cliente->getHabilitado()) ?>">

                        <label>Nombre</label>
                        <input type="text" class="form-control" id="nom_cliente" name="nom_cliente" aria-describedby="emailHelp" placeholder="Nombre"
                        value=<?php echo ($cliente->getNom_cliente())?>>
                        <small id="emailHelp" class="form-text text-muted">Nombre completo.</small>    
                        
                        <table style="border: hidden"> 
                            <tr> 
                                <td>                 
                                    <div class="form-group">
                                    <label >Telefono</label>
                                        <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" aria-describedby="emailHelp" placeholder="telefono"
                                        value=<?php echo ($cliente->getTelefono_cliente())?>>
                                        <small id="emailHelp" class="form-text text-muted">Este es el numero al que se le contactara.</small>
                                    </div>
                                </td>
                                <td>                 
                                    <div class="form-group">
                                    <label>Dirección</label>
                                        <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" aria-describedby="emailHelp" placeholder="Dirección"
                                        value=<?php echo ($cliente->getDireccion_cliente())?>>
                                        <small id="emailHelp" class="form-text text-muted">Lugar de residencia.</small>
                                    </div>
                                </td>
                            </tr>
                                                        
                        <tr>                  
                            <td>
                                <div class="form-group">
                                <label>Correo electronico</label>
                                    <input type="email" class="form-control" id="correo_cliente" name="correo_cliente" aria-describedby="emailHelp" placeholder="Email" 
                                    value="<?php echo ($cliente->getCorreo_cliente())?>">
                                    <small id="emailHelp" class="form-text text-muted">Este es el correo registrado.</small>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label>Usuario</label>
                                    <input type="text" class="form-control" id="userName" name="userName" aria-describedby="emailHelp" placeholder="Usuario" value="<?php echo (($_SESSION['user']))  ?>">
                                    <small id="emailHelp" class="form-text text-muted">Este es el usuario con el que se registra.</small>
                                </div>
                            </td>
                        </tr>

                        <tr>    
                            
                            <td>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Contraseña nueva</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword" aria-describedby="emailHelp" placeholder="Contraseña"
                                    value="">
                                    <small id="emailHelp" class="form-text text-muted">Ingrese una constraseña nueva.</small>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Confrimar contraseña</label>
                                    <input type="password" class="form-control" id="conPassword" name="conPassword" aria-describedby="emailHelp" placeholder="Confirmación"
                                    value="">
                                    <small id="emailHelp" class="form-text text-muted">Confirmación de la nueva contraseña.</small>
                                </div>
                            </td>
                        </tr>
                        
                    </table>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña antigua</label>
                            <input type="password" class="form-control" name="conPassword1" id="conPassword1" aria-describedby="emailHelp" placeholder="contraseña antigua"
                            value="">
                            <small id="emailHelp" class="form-text text-muted">Para realizar cualquier cambio es necesario que ingrese la contraseña antigua.</small>
                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Actualizar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
		include("footer.php");
?>

<script>
        function editarPerfil() {

            datos = $('#editarPerfil').serialize();

            $.ajax({
                type: "POST",
                data: datos,
                url: "editar_perfil.php",
                success: function(r) {

                    console.log(r);
                    if (r == 1) {
                        toastr["success"]('Actualizando perfil...', "NOTIFICACIÓN");
                        window.location.href = "index.php";
                    } else {
                        toastr["success"](r, "ERROR");
                    }
                }
            });

        }
    </script>

</html>