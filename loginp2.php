<!doctype html>
<html class="no-js" lang="zxx">
<?php
		include("header.php");
        ?>
  

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <?php
		include("menu.php");
		?>
        <!-- //Header -->
        <!-- Start Search Popup -->

        <!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-imagenindex--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Ingresar a la Plataforma</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.html">Inicio</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Ingresar</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start My Account Area -->
        <!--    nombre télefono dirección //    nombre tel dirección ced cuidad pais    -->
        <section class="my_account_area pt--80 pb--55 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="my__account__wrapper">
                            <h3 class="account__title">Iniciar sesión</h3>
                            <form action="" method="POST" id="ingresoLib">

                                <div class="account__form">
                                    <div class="input__box">
                                        <label>Usuario<span>*</span></label>
                                        <input type="text" class="form-control input-lg" id="username" required
                                            autocomplete="new-user" <?php
                                        if (isset($userForm)) {
                                            echo ("value='" . $userForm . "'");
                                        }
                                        ?> name="username" placeholder="Usuario">
                                    </div>

                                    <div class="input__box">
                                        <label>Contraseña<span>*</span></label>
                                        <input type="password" class="form-control input-lg" id="password" required
                                            autocomplete="new-password" <?php
                                        if (isset($passForm)) {
                                            echo ("value='" . $passForm . "'");
                                        }
                                        ?> name="password" placeholder="Contrase&ntilde;a">
                                    </div>

                                    <?php
                                if (isset($mostrarCodigo)) {
                                    
                                    ?>
                                    <div class="input__box">
                                        <label>Codigo de Verificación<span>*</span></label>
                                        <input type="password" class="form-control input-lg" id="verifi" name="verifi"
                                            placeholder="Codigo Verificación" required>
                                    </div>
                                    <?php

                                }else{
                                    ?>
                                    <div class="g-recaptcha" data-sitekey="6LfBS-0ZAAAAAEoDvNduZQslzqIP5NO-Gw2cTI1r"></div>

                                    <?php


                                }
                                ?>

                                <div class="form__btn">
                                    <button>Ingresar</button>
                                    <label class="label-for-checkbox">

                                    </label>
                                </div>

                                <?php

									if (isset($errorEntrada)) {
									echo  $errorEntrada;
									}
									?>
                                <button type="button" class="btn btn-light" data-toggle="modal"
                                    data-target="#exampleModalCenter" style="background-color: #ffffff;">
                                    ¿Olvidaste tu contraseña?
                                </button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="my__account__wrapper">
                        <h3 class="account__title">Registrarse</h3>
                        <div class="account__form">
                            <h2>¿Deseas ser parte de la comunidad Bosquecillo? </h2>
                            <div class="card card-default border-0">
                                <ul class="nav nav-pills nav-justified nav-style-fill" style="display: none;" id="myTab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home3-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home3" aria-selected="true">Datos Personales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile1"
                                            role="tab" aria-controls="profile3" aria-selected="false"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile2"
                                            role="tab" aria-controls="profile4" aria-selected="false"></a>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <?php
                                            include('registrophp/divWizardRegistro.php')
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- End My Account Area -->
    <!-- Footer Area -->
    <?php
		include('footer.php')
		?>
    <!-- //Footer Area -->

    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cambiar
                        contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div id="cambiarContenido">

                            <?php  if(!(isset($codigoEnviado) or  isset($ingresarNuevaContra))){
                                ?>
                            <?php if((isset($errorCorreo))){
                                    echo("<label >".$errorCorreo."</label>");
                                }  ?>
                            <label for="">Ingresa El correo de Registro:</label>
                            <br>
                            <input class="form-control input-lg" type="text" placeholder="ejemplo@correo.com"
                                pattern="^[_A-Za-z0-9-+]+(.[_A-Za-z0-9-]+)@[A-Za-z0-9-]+(.[A-Za-z0-9]+)(.[A-Za-z]{2,})$"
                                title="No Cumple con el Formato de Correo Electrónico" id="correoOlvidar"
                                name="correoOlvidar" required>
                            <br>
                            <button type="submit" class="btn">Enviar codigo de
                                Confirmación</button>
                            <?php
                            } ?>
                            <?php  if(isset($codigoEnviado)){
                                ?>
                            <?php if((isset($errorCodigoConf))){
                                    echo("<label >".$errorCodigoConf."</label>");
                                }else{
                                    ?>
                            <label for=""> <?php echo($codigoEnviado); ?></label>
                            <?php
                                }  ?>
                            <label for="">Ingrese el codigo de confirmacion:</label>
                            <br>
                            <input class="form-control input-lg" type="hidden" id="correoConf" name="correoConf"
                                value="<?php echo ($correoE); ?>">
                            <input class="form-control input-lg" type="number" id="confirmacionCambio"
                                name="confirmacionCambio" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Validar
                                Codigo</button>
                            <?php
                            } ?>
                            <?php  if(isset($ingresarNuevaContra)){
                                ?>
                            <br>
                            <?php if((isset($errorContraconfir))){
                                    echo("<label >".$errorContraconfir."</label>");
                                }  ?>
                            <label for="">Ingrese su nueva contraseña:</label>
                            <br>
                            <input class="form-control input-lg" type="hidden" id="correoConf" name="correoConf"
                                value="<?php echo ($correoE); ?>">
                            <input class="form-control input-lg" type="password" id="contrasena1con"
                                name="contrasena1con" required>
                            <br>
                            <label for="">Confirme su nueva contraseña:</label>
                            <br>
                            <input class="form-control input-lg" type="password" id="contrasena2con"
                                name="contrasena2con" required>
                            <button type="submit" class="btn btn-primary">Cambiar
                                Contraseña</button>
                            <?php
                            } ?>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>


                </div>
            </div>
        </div>
    </div <!-- //Main wrapper -->
    <script>
    function mostrar() {
        $("#exampleModalCenter").modal("show")
    };
    document.addEventListener("DOMContentLoaded", function(event) {});
    </script>

    <script>
    window.onload = function() {
    var recaptcha = document.forms["ingresoLib"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
        // do something
        toastr["warning"]("Para continuar por favor, valide el captcha", "Disculpe");
    }
    }
    </script>

    <?php  if((isset($mostrarDialogo))){
                                ?>
    <!-- // php cuadno este ready -->
    <script>
    $(document).ready(function() {
        mostrar();
    });
    </script>
    <?php 
 }
?>
    <?php  if((isset($errorCorreoRecuperacion))){
                                ?>
    <!-- // php cuadno este ready -->
    <script>
    $(document).ready(function() {
        toastr["alert"](<?php echo($errorCorreoRecuperacion) ?>, "Disculpas");
    });
    </script>
    <?php 
 }
?>
  <script src="https://www.google.com/recaptcha/api.js" async defer > </script>

</body>

</html>