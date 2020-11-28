<?php
$ruta="../archivos/documentos/modelos.pdf";
$file=file($ruta);
$file2=implode("",$file);
$decom=explode( '/', $ruta );
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$decom[3]);
echo $file2;
?>