<?php 
$var=0;
?>
<div class="tab-content" id="myTabContent4">
    <div class="tab-pane pt-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <select class="custom-select custom-select-lg mb-3" id="selecionarTipoRegistro">
            <option selected>Seleccione Registro</option>
            <option value="1">Cliente</option>
            <option value="2">Publicador</option>

        </select>
        <div class="form__btn">
            <a class="btn btnRegistro" onclick="pasarFormulario1(1);">Continar (1/3)</a>
            <label class="label-for-checkbox">
            </label>
        </div>

    </div>
    <div class="tab-pane pt-3 fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
        <div class="form__btn">
            <div class="input__box">
                <label>Correo Electrónico <span>*</span></label>
                <input autocomplete="off" type="email" class="form-control" placeholder="usuario" style="display:none;"
                    aria-label="Username">
                <input autocomplete="false" type="text"
                    pattern="^[_A-Za-z0-9-+]+(.[_A-Za-z0-9-]+)@[A-Za-z0-9-]+(.[A-Za-z0-9]+)(.[A-Za-z]{2,})$"
                    title="No Cumple con el Formato de Correo Electrónico" class="form-control" id="emailR"
                    name="emailR" required placeholder="Correo Electrónico (Usuario)" maxlength="100"
                    aria-label="Username">
            </div>
            <div class="input__box">
                <label>Contraseña<span>*</span></label>
                <input autocomplete="off" type="password" class="form-control" placeholder="Contraseña"
                    style="display:none;" aria-label="Username">
                <input autocomplete="off" type="password" class="form-control" placeholder="Contraseña" required
                    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" aria-label="Username" id="contraR"
                    name="contraR"
                    title="El formato de la contraseña debe ser contener al menos 1 mayúscula, 1 minúscula y 1 numero min 8 caracteres ">
            </div>
            <div class="input__box">
                <label>Confirmar Contraseña<span>*</span></label>
                <input type="password" id="contraConf" name="contraConf" placeholder="Confirmar Contraseña">
            </div>
            <div class="row">
                <div class="form__btn">
                    <a class="btn btnRegistro" onclick="regresar(1);">Regresar</a>
                </div>
                <p style="margin-left:2em"></p>
                <p style="margin-left:2em"></p>
                <a class="btn btnRegistro" onclick="pasarFormulario1(2);">Continar (2/3)</a>
            </div>
            <label class="label-for-checkbox"></label>

        </div>
    </div>
    <div class="tab-pane pt-3 fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
        <div class="input__box">
            <?php  
            if($var==1) {
                $hola=1;
                
            ?>
            es un cliente
            <?php }else{ ?>
            es un publicador
            <?php
            $hola=1;
            }
            ?>
            <label>Correo Electrónico <span>*</span></label>
            <input autocomplete="off" type="email" class="form-control" placeholder="usuario" style="display:none;"
                aria-label="Username">
            <input autocomplete="false" type="text"
                pattern="^[_A-Za-z0-9-+]+(.[_A-Za-z0-9-]+)@[A-Za-z0-9-]+(.[A-Za-z0-9]+)(.[A-Za-z]{2,})$"
                title="No Cumple con el Formato de Correo Electrónico" class="form-control" id="prueba" name="prueba"
                required placeholder="Correo Electrónico (Usuario)" maxlength="100" aria-label="Username">
        </div>
        <!--    nombre télefono dirección //    nombre tel dirección ced cuidad pais    -->
        <div class="row">
            <div class="form__btn">
                <a class="btn btnRegistro" onclick="regresar(2);">Regresar</a>
            </div>
            <p style="margin-left:2em"></p>
            <p style="margin-left:2em"></p>
            <a class="btn btnRegistro" onclick="pasarFormulario1(2);">Continar (2/3)</a>
        </div>

        <label class="label-for-checkbox">
        </label>
    </div>
</div>
</div>

<script>
function pasarFormulario1(a) {

    if (a == 1) {
        if ($("#selecionarTipoRegistro").val() == 2 || $("#selecionarTipoRegistro").val() == 1) {
            if ($("#selecionarTipoRegistro").val() == 1) {
                console.log("entrada a modificar los valores con v1");
                <?php 
                $var=1; 
                ?>
            } else {
                console.log("entrada a modificar los valores con v2");
                <?php 
                $var=2; 
                ?>
            }
            $('[href="#profile1"]').tab('show');
        }
    } else {
        if ($("#contraR").val() == $("#contraConf").val()) {
            $('[href="#profile2"]').tab('show');
        } else {
            toastr["warning"]("las contraseñas tienen que ser las mismas", "ERROR");
        }
    }
}

function regresar(a) {

    if (a == 2) {
        $('[href="#profile1"]').tab('show');

    } else {
        $('[href="#home"]').tab('show');
    }
}
</script>