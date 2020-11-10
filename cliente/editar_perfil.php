<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Cliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/ControladorUsuario.php');



$datos=array(
    $_POST["cod_cliente"],
    $_POST["cod_usuario"],
    $_POST["nom_cliente"],
    $_POST["telefono_cliente"],
    $_POST["correo_cliente"],
    $_POST["direccion_cliente"],
    $_POST["habilitado"]       
);

$conUsuario=new ControladorUsuario();
$validacion=$conUsuario->validarContra($datos[3],$_POST["conPassword1"]);

if(count($validacion)>0)
{
    if($_POST["newPassword"]==null and $_POST["conPassword"]==null)
    {
    $conCliente= new ControladorCliente();
    $cliente=new Cliente($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
    echo($conCliente->actualizarRegistro($cliente));
    }

    else if($_POST["newPassword"]!=null or $_POST["conPassword"]!=null)
    {
        if($_POST["newPassword"]==$_POST["conPassword"])
        {
            $conCliente= new ControladorCliente();
            $cliente=new Cliente($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
            $conCliente->actualizarRegistro($cliente);
                        
            // $conUsuario=new ControladorUsuario();
            // echo($conUsuario->actualizarUsuario($datos[3],$_POST["conPassword"]));
        }else{
            echo("La nueva contraseña no coincide con la confirmación");
        }
    }    
}
else{
    echo("Por favor ingrese la contraseña actual para realizar cambios");
}

?>