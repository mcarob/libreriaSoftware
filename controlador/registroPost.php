<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPublicador.php');
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
    $nombre=$_POST['nombreReg'];
    $telefono=$_POST['telReg'];
    $correo=$_POST['emailR'];
    $direccion=$_POST['dirReg'];
    $contra=$_POST['contraR'];

    if($_POST['selecionarTipoRegistro']==1){
        $cliente = new Cliente(null,null,$nombre,$telefono,$correo,$direccion,null);
        $controladorCliente = new ControladorCliente();
        $respuesta=$controladorCliente->agregarRegistroPlataforma($cliente,$contra);
        echo ($respuesta);

    }else{
        $identificacion=$_POST['identiReg'];
        $pais=$_POST['paisRegistro'];
        $ciudad=$_POST['ciudadReg'];
        $publicador= new Publicador(null,null,$identificacion,$nombre,$correo,$direccion,$ciudad,$pais,$telefono);

}

}
?>