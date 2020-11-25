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
    include_once 'loginp2.php';
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
    include_once 'loginp2.php';
}


}else if(isset($_POST['correoOlvidar'])){
    $usu=$controladorR->darUsuario($_POST['correoOlvidar']);
    if($usu!=null){
		$respuestaCorreoR=$controladorR->mandarCorreoRecuperacion($_POST['correoOlvidar']);
		
		if($respuestaCorreoR==1){
			$mostrarDialogo=True;
			$correoE=$_POST['correoOlvidar'];
			$codigoEnviado="Se ha enviado un codigo a su correo, por favor no cierre este dialogo.";
			include_once 'loginp2.php';
		}else{
			$mostrarDialogo=True;
			$errorCorreo=$respuestaCorreoR;
			include_once 'loginp2.php';
		}
	}else{
		$mostrarDialogo=True;
		$errorCorreo="No existe el correo en Nuestra Base de Datos";
		include_once 'loginp2.php';
	}

}else if(isset($_POST['confirmacionCambio'])){
    $correoE=$_POST['correoConf'];
	$respuestaconfiCodigo=$controladorR->validarCorreoContraOlv($correoE,$_POST['confirmacionCambio']);
	if($respuestaconfiCodigo==1){
		$correoE=$_POST['correoConf'];
		$ingresarNuevaContra=true;
		$mostrarDialogo=True;
	}else{
		$correoE=$_POST['correoConf'];
		$errorCodigoConf="Hay un Error en la validación del codigo, confirme el codigo";
		$mostrarDialogo=True;
		$codigoEnviado=True;
	}
	include_once 'loginp2.php';

}else if(isset($_POST['contrasena1con'])){
    if($_POST['contrasena1con']==$_POST['contrasena2con']){
        $correoUsuarioIngreso=$_POST['correoConf'];
        $usuario=$controladorR->darUsuario($correoUsuarioIngreso);
        $respuesta=$controladorR->cambiarContraUsuario($usuario);
        $tipo=$usuario->getCod_tipo_usuario();
        $userSession->setTipoUsuario($tipo);
        $userSession->setCurrentUser($_POST['correoConf']);
        $respuestaconfiCodigo=$controladorR->cambiarContraUsuario($usuario);
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
    $correoE=$_POST['correoConf'];
		$mostrarDialogo=True;
		$errorContraconfir="Las contraseñas deben ser iguales, por favor intente nuevamente";
		$ingresarNuevaContra=true;
		include_once 'loginp2.php';
}

}else{
    include_once 'loginp2.php';
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
        $pasar=True;
        if(isset($_POST["g-recaptcha-response"])){
            $secretKey 	= '6LfBS-0ZAAAAAG1MOYPzqBho4p5FRf2ZcCya-DxI';
           $token 		= $_POST["g-recaptcha-response"];
           $ip			= $_SERVER['REMOTE_ADDR'];
           $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
           $request = file_get_contents($url);
           $response = json_decode($request);

        if(!$response->success){
            $pasar=False;
        }
        }
        if($pasar){
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
    
                    if(md5(($_POST['verifi']))==$usuario->getCodigo_verificacion()){
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
                        include_once 'loginp2.php';
                    }
                    
                }else{
                    $mostrarCodigo=true;
                    include_once 'loginp2.php';
                }
                
            }else{
                $errorEntrada="No puede ingresar a la plataforma, puede contactarse a ____ y enviar un correo para habilitar su usuario";
                include_once 'loginp2.php';
            }
        }else{
            $errorEntrada="No se puede validar el captcha vuelva a intentarlo nuevamente";
            include_once 'loginp2.php';
        }

        

    }else{
        $errorEntrada="La contraseña no es correcta";
        include_once 'loginp2.php';
    }	
}
?>