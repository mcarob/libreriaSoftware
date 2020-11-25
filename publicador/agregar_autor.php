<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorAutor.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/Entidades/autor.php');
print_r($_POST);
$datos=array(

    $_POST["nAutor"],
    $_POST["aAutor"],
    $_POST["nacimiento"],
    $_POST["biografia"],         
);

$controlador = new ControladorAutores();
$autor = new autor(0,$datos[0],$datos[1],$datos[2],$datos[3]);

echo($controlador->agregarRegistro($autor));

?>
