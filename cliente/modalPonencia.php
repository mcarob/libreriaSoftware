<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');

$conDocumento = new ControladorDocumento();
$idLibro = $_GET['libro'];
$libro = $conDocumento->darInfoXdoc($idLibro);
$cod_cliente=$_GET['cliente'];

?>


<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Ponencia: <?php echo $libro["titulo_documento"] ?></h3>        
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
                    <td>Congreso: </td>
                    <td><?php echo $libro["informacion_congreso"] ?></td>
                </tr>
                <tr>
                    <td>Idioma: </td>
                    <td><?php echo $libro["nom_idioma"] ?></td>
                </tr>                
                <tr>
                    <td>ISBN: </td>
                    <td><?php echo $libro["codigo_isbn"] ?></td>
                </tr>                
                <tr>
                    <td>Desc. fisica: </td>
                    <td><?php echo $libro["informacion_paginas"]." paginas" ?></td>
                </tr>                
                              
                <td><button id="botonCerrar" type="submit" class="btn btn-danger mb-2 btn-pill" >Cerrar</button></td>
                <?php if($libro["existencias"]>0){
                  echo  ("<td><button id='botonReservar' type='submit' class='btn btn-primary mb-2 btn-pill' >Reservar</button></td>");
                }else if($libro["existencias"]<0){
                  echo  ("<td><button id='botonReservar' type='submit' class='btn btn-primary mb-2 btn-pill' >Solicitar</button></td>");
                }?>
                
                </table>
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