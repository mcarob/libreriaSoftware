
<div class="tab-content" id="myTabContent4">
    <div class="tab-pane  fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <h3>¿Qué tipo de usuario eres? </h3>
        <select class="custom-select custom-select-lg mb-3" id="selecionarTipoRegistro" name="selecionarTipoRegistro">
            <option selected>Seleccione Registro</option>
            <option value="1">Cliente</option>
            <option value="2">Publicador</option>

        </select>
        <div class="form__btn">
            <a class="btn btnRegistro" onclick="pasarFormulario1(1);">Continar (1/3)</a>
            <label class="label-for-checkbox">
            </label>
        </div>
// #1f3258e3
    </div>
    <div class="tab-pane  fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
        <h3>Ingresa tus datos de usario </h3>
        <div class="form__btn">
            <div class="input__box">
                <label>Correo Electrónico <span>*</span></label>
                <input autocomplete="off" type="email" class="form-control" placeholder="usuario" style="display:none;"
                    aria-label="Username">
                <input autocomplete="false" type="text"
                    pattern="^[_A-Za-z0-9-+]+(.[_A-Za-z0-9-]+)@[A-Za-z0-9-]+(.[A-Za-z0-9]+)(.[A-Za-z]{2,})$"
                    title="No Cumple con el Formato de Correo Electrónico" class="form-control" id="emailR"
                    name="emailR"  placeholder="Correo Electrónico (Usuario)" maxlength="100"
                    aria-label="Username">
            </div>
            <div class="input__box">
                <label>Contraseña<span>*</span></label>
                <input autocomplete="off" type="password" class="form-control" placeholder="Contraseña"
                    style="display:none;" aria-label="Username">
                <input autocomplete="off" type="password" class="form-control" placeholder="Contraseña" 
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
    <div class="tab-pane  fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">

    </div>
</div>
</div>



<script>
var respuesta;

function esperarAjax() {
    var parametros = {
        "forma": "verificar",
        "correo": $("#emailR").val(),
    };
    toastr["warning"]("Estamos verficando su correo", "Un Momento");
    $.ajax({
        data: parametros, //datos que se envian a traves de ajax
        url: 'controlador/registroPost.php', //archivo que recibe la peticion
        type: 'POST', //método de envio
        success: function(r) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            console.log("información function r");
            console.log("el valor de r es de "+r);
            if (r=="1") {
                if ($("#selecionarTipoRegistro").val() == 2) {
                    console.log("entra a la linea 74");
                    $("#profile2").load("registrophp/formPublicador.php");
                } else {
                    console.log("entra a la linea 77");
                    $("#profile2").load("registrophp/formCliente.php");
                }
                $('[href="#profile2"]').tab('show');

            } else {
                toastr["warning"]("El correo ya se encuentra registrado", "ERROR");
            }
        }
    });
}

function pasarFormulario1(a) {

    if (a == 1) {
        if ($("#selecionarTipoRegistro").val() == 2 || $("#selecionarTipoRegistro").val() == 1) {
            $('[href="#profile1"]').tab('show');
        }
    } else {
        if ($("#contraR").val() == $("#contraConf").val()) {
            esperarAjax();
            // validar el correo 
        } else {
            toastr["warning"]("las contraseñas tienen que ser las mismas", "ERROR");
        }
    }
}

function Registrarse(){

    datos = $('#RegistroPasos').serialize();
    console.log(datos);
    $.ajax({
        data: datos, //datos que se envian a traves de ajax
        url: 'controlador/registroPost.php?REGISTRAR=si', //archivo que recibe la peticion
        type: 'POST', //método de envio
        success: function(r) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            console.log("información function r");
            console.log("el valor de r es de "+r);
        }
    });

}

function regresar(a) {

    if (a == 2) {
        $('[href="#profile1"]').tab('show');

    } else {
        $('[href="#home"]').tab('show');
    }
}
</script>
<script>



</script>