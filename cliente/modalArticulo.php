<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');

$conDocumento = new ControladorDocumento();
$idLibro = $_GET['libro'];
$libro = $conDocumento->darInfoXdoc($idLibro);
$cod_cliente=$_GET['cliente'];

?>


<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Articulo: <?php echo $libro["titulo_documento"] ?></h3>        
        </div>
        <div class="modal-body px-4">

            <form id="reserva" method="POST" action="javascript:agregarPeticion()">
            
                <div class="modal-body px-4">
                <div>
                    <div class="row mb-2">
                        <!-- Card -->

                    <!-- Avatar -->
                    <img src="assetsCliente/images/books/1.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                    <!-- Content -->
                    <div>

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold mb-2">Autor: <?php echo $libro["nombre_autor"]." ".$libro["apellido_autor"] ?></h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>Publicado: <?php echo $libro["fecha_publicacion"] ?></p>

                    </div>
                </div>
                <br>
                
                <table>
                <tr>
                <td><b>Especificaciones: </b></td>
                <td></td>
                </tr>
                <tr>
                <td>SSN:</td>
                    <?php if($libro["informacion_ssn"]==null){
                        echo ('<td> No posee</td>');
                    }else{ ?>
                    
                    <td><?php echo $libro["informacion_ssn"] ?></td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Idioma: </td>
                    <td><?php echo $libro["nom_idioma"] ?></td>
                </tr>                
                <tr>
                    <td>ISBN: </td>
                    <?php if($libro["codigo_isbn"]==null){
                        echo ('<td> No posee</td>');
                    }else{ ?>
                    <td><?php echo $libro["codigo_isbn"] ?></td>
                    <?php }?>
                </tr>                
                <tr>
                    <td>Desc. fisica: </td>
                    <td><?php echo $libro["informacion_paginas"]." paginas" ?></td>
                </tr>                               
                
                
                
                </table>
                <br>
                <button id='botonReservar' type='submit' class='btn btn-primary mb-2 btn-pill' >Descargar</button>
                <input type="hidden" id="cliente" name="cliente" value="<?php echo $cod_cliente?>" />
                <input type="hidden" id="ponencia" name="ponencia" value="<?php echo $idLibro ?>" />
                <input type="hidden" id="existencias" name="existencias" value="<?php echo $libro["existencias"] ?>" />
                <input type="hidden" id="presentacion" name="presentacion" value="<?php echo $libro["nom_tipo_presentacion"] ?>" />
            </form>
        </div>
</div>

<script>
    
        function agregarPeticion() {
            
               
            datos = $('#reserva').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "agregar_ponencia.php",
                        success: function(r) {

                            console.log(r);
                            if (r == 1) {
                                toastr["success"]('Realizando descarga...', "NOTIFICACIÓN");
                                window.location.href = "reservasD.php";
                            } else {
                                toastr["error"]("No se pudo realizar la descarga", "ERROR");
                            }
                        }
                    });

               
        }
    </script>