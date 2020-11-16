<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/controladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/user_Sesion.php');

$userSession = new UserSession();
$controladorR = new ControladorRegistro();



if(isset($_SESSION['user'])){
    $usuario=$controladorR->darUsuario($userSession->getCurrentUser());
    $tipo=$usuario->getCod_tipo_usuario();
    if($tipo==1){
    header('location: administrador/index.php');
    }else if($tipo==2){
    header('location: empleado/index.php');
    }else if($tipo==3){
        header('location: publicador/index.php');
    }else{
        header('location: cliente/index.php');
    }
    include_once 'loginp.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
/** la sesión  aun no se encuentra creada, 
 * este if es para cuando la persona esta usando el formulario de ingreso 
 * por lo tanto se busca si el usuario y la contraseña coincide con el que se encuentra en la base de datos
 * 
 */
$usu=$controladorR->darUsuario($_POST['username']);
if($usu!=null){
    verificarIngresoUsuario($usu);

}else{
    $errorEntrada="No existe un usuario con ese correo, Puedes registrarte y empezar a usar nuestros servicios";
    include_once 'loginp.php';
}


}else if(isset($_POST['correoOlvidar'])){

}else if(isset($_POST['confirmacionCambio'])){

}else if(isset($_POST['contrasena1con'])){

}else{
    include_once 'loginp.php';
}



function verificarIngresoUsuario(Usuario $usuario){
    global $errorEntrada,$controladorR,$userSession,$mostrarCodigo;
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $contraMD5=md5($passForm);
    if($usuario->getPass_usuario()==$contraMD5){
        /** 
         * 1) administrador 
         * 2) empleado
         * 3) publicador
         * 4)  cliente
         */
        if($usuario->getEstado_usuario()==4 or  $usuario->getEstado_usuario()==3){
            $userSession->setCurrentUser($userForm);
            $tipo=$usuario->getCod_tipo_usuario();
            $userSession->setTipoUsuario($tipo);
            if($tipo==1){
                header('location: administrador/index.php');
                }else if($tipo==2){
                header('location: empleado/index.php');
                }else if($tipo==3){
                    header('location: publicador/index.php');
                }else{
                    header('location: cliente/index.php');
                }
        }elseif($usuario->getEstado_usuario()==1){
            if(isset($_POST['verifi'])){
                if(md5(($_POST['verifi']))==$usuario->getCodigo){
                    $userSession->setCurrentUser($userForm);
                    $tipo=$usuario->getCod_tipo_usuario();
                    $userSession->setTipoUsuario($tipo);
                    $controladorR->cambiarEstadoValidado($usuario->getCod_usuario());
                    if($tipo==1){
                        header('location: administrador/index.php');
                        }else if($tipo==2){
                        header('location: empleado/index.php');
                        }else if($tipo==3){
                            header('location: publicador/index.php');
                        }else{
                            header('location: cliente/index.php');
                        }
                }else{
                    $mostrarCodigo=true;
                    $errorEntrada="El codigo de verificación es incorrecto";
                    include_once 'loginp.php';
                }
                
            }else{
                $mostrarCodigo=true;
                include_once 'loginp.php';
            }
            
        }else{
            $errorEntrada="No puede ingresar a la plataforma, puede contactarse a ____ y enviar un correo para habilitar su usuario";
            include_once 'loginp.php';
        }
        

    }else{
        $errorEntrada="La contraseña no es correcta";
        include_once 'loginp.php';
    }

	
}

?>|