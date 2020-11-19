<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/controladorRegistro.php');
if(isset($_POST['forma'])){
    if(isset($_POST['correo'])){
        $controller=new ControladorRegistro();
        $variableUsuario=$controller->darUsuario(($_POST['correo']));
        if($variableUsuario==null){
            echo("1");
        }else{
            echo("0");
        }
    }
}
if(isset($_GET['REGISTRAR'])){
    echo("entro a la linea 15");
    print_r($_POST);
}
?>