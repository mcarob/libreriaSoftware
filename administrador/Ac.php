<?php

//CONTROLADORES
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorEmpleados.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorUsuario.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPrestamoF.php');

//ENTIDADES
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/empleado.php');


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'AgregarE':
            $datos = array(
                $_POST["cedula"],
                $_POST["nombre"],
                $_POST["telefono"],
                $_POST["correo"]
            );
            // FALTA EL CONTROLADOR DEL USUARIO
            $CEmpleados = new ControladorEmpleados();
            $empleado = new Empleado(0, 0, $datos[0], $datos[1], $datos[2], $datos[3]);
            echo $r = $CEmpleados->agregarRegistro($empleado);
            if ($r) {
                header("location:TablaEmpleados.php");
            } else {
                echo ($r);
            }
            break;

        case 'APublicador':
            $CUsuarios = new ControladorUsuario();
            echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],4);
            if ($r) {
                header("location:TablaPublicadoresInac.php");
            } else {
                echo ($r);
            }
            break;

        case 'rechazarPu':
            $CUsuarios = new ControladorUsuario();
            echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],6);
            if ($r) {
                header("location:TablaPublicadoresInac.php");
            } else {
                echo ($r);
            }
            break;

        case 'aceptarDevo':
            $CPrestamoF = new ControladorPrestamoFisico();
            echo $r = $CPrestamoF->aceptarDevolucion($_GET['codigo']);
            if ($r) {
                header("location:LibrosPrestados.php");
            } else {
                echo ($r);
            }

            break;

        case 'estadoPub':
            $CUsuarios = new ControladorUsuario();
            $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);
            if($user->getEstado_usuario()==4){
                // InActivar
                echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],5);
                if ($r) {
                    header("location:TablaPublicadores.php");
                } else {
                    echo ($r);
                }
            }
            else if($user->getEstado_usuario()==5){
                //Activar
                echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],4);
                if ($r) {
                    header("location:TablaPublicadores.php");
                } else {
                    echo ($r);
                }
            }
        break;

        case 'AgregarC':
            $datos = array(
                $_POST["nombre"],
                $_POST["telefono"],
                $_POST["correo"],
                $_POST["direccion"]
            );

            // PROCEDIMIENTO PARA AGREGAR CLIENTE
        break;

        
        case 'reservarLxC':
            $datos = array(
                $_POST["cod_libro"],
                $_POST["cod_cliente"]
            );

            // METODO PARA RESERVAR POR EL CLIENTES
        break; 
        
        case 'estadoEm':
            $CUsuarios = new ControladorUsuario();
            $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);
            if($user->getEstado_usuario()==4){
                // InActivar
                echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],5);
                if ($r) {
                    header("location:TablaEmpleados.php");
                } else {
                    echo ($r);
                }
            }
            else if($user->getEstado_usuario()==5){
                //Activar
                echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'],4);
                if ($r) {
                    header("location:TablaEmpleados.php");
                } else {
                    echo ($r);
                }
            }
        break;

        
        
    }
}
