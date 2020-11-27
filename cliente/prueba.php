<?php
if(isset($_POST["idDocumento"]))
{
    $file=$_POST["idDocumento"];
    $file2=implode("",$file);
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=modelos.pdf");

    echo $file2;
}

?>