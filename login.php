<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/controladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/user_Sesion.php');

$userSession = new UserSession();
$controladorR = new ControladorRegistro();



if(isset($_SESSION['user'])){
    $usuario=$controladorR->darUsuario($userSession->getCurrentUser());
    $tipo=$usuario->getCod_tipo_usuario();
		if($tipo==1 || $tipo==4){
		header('location: Admin/index.php');
		}else if($tipo==2){
        header('location: Estudiante/postulaciones.php');
		}else if($tipo==3){
            header('location: Empresa/index.php');
		}
		include_once 'ingresoF.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
/** la sesión  aun no se encuentra creada, 
 * este if es para cuando la persona esta usando el formulario de ingreso 
 * por lo tanto se busca si el usuario y la contraseña coincide con el que se encuentra en la base de datos
 * 
 */
$respuesta=verificarIngresoUsuario($controladorR,$userSession);
if($respuesta==True){
   
}else{
 $errorEntrada= $respuesta;
}

}else if(isset($_POST['correoOlvidar'])){

}else if(isset($_POST['confirmacionCambio'])){

}else if(isset($_POST['contrasena1con'])){

}else{
    include_once 'loginp.php';
}



function verificarIngresoUsuario($controladorR,$userSession){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $usuario=$controladorR->darUsuario($userSession->getCurrentUser());
    if($usuario!=null){
        $contraMD5=md5($passForm);
        if($usuario->getPass_usuario()==$contraMD5){
            /** 
             * 1) administrador 
             * 2) empleado
             * 3) publicador
             * 4)  cliente
             */
            if($usuario->getEstado_usuario()==1){
                $userSession->setCurrentUser($userForm);
                $tipo=$usuario->getCod_tipo_usuario();
                $userSession->setTipoUsuario($tipo);
                if($tipo==1 || $tipo==4){
                    header('location: administrador/index.php');
                    }else if($tipo==2){
                    header('location: empleado/index.php');
                    }else if($tipo==3){
                        header('location: publicador/index.php');
                    }else{
                        header('location: cliente/index.php');
                    }
            }elseif($user->darEstado()==2){
                if(isset($_POST['verifi'])){
                    if(md5(($_POST['verifi']))==$user->darVerificacion()){
                        $userSession->setCurrentUser($userForm);
                        $user->setUser($userForm);
                        $tipo=$user->getTipoUsuario();
                        $userSession->setTipoUsuario($tipo);
                        $user->cambiarEstadoValido();
                        if($tipo==1 || $tipo==4){
                            header('location: Admin/index.php');
                            }else if($tipo==2){
                            header('location: Estudiante/ListaPostulaciones.php');
                            }else if($tipo==3){
                            header('location: Empresa/index.php');
                            }
                    }else{
                        $mostrarCodigo=true;
                        $errorEntrada="El codigo de verificación es incorrecto";
                        include_once 'ingresoF.php';
                    }
                    
                }else{
                    $mostrarCodigo=true;
                    include_once 'ingresoF.php';
                }
                
            }else{
                echo($user->darEstado());
            }
          
    
        }
    }else{
        return false;"No existe un usuario con ese correo, Puedes registrarte y empezar a usar nuestros servicios";
        include_once 'ingresoF.php';
    }
	
}

?>|