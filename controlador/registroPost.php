<?php


if(isset($_POST['forma'])){
    echo("entro a verificar la cosa esta ");
    if(isset($_POST['correo'])){
        echo("entro al post de correo con ");
        echo(isset($_POST['correo']));
    }
}

?>