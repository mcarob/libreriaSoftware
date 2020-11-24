<form id="formulTotal" onsubmit=" return Registrarse()">
<h3>Ingresa tus datos Personales </h3>
<div class="input__box">
    <label>Nombres y Apellidos <span>*</span></label>
    <input type="text" class="form-control input-lg" id="nombreReg" name="nombreReg" placeholder="Nombres y Apellidos">
    <label>Teléfono <span>*</span></label>
    <input type="text" class="form-control input-lg" id="telReg" name="telReg" placeholder="Teléfono o Celular">
    <label>Identificación <span>*</span></label>
    <input type="text" class="form-control input-lg" id="identiReg" name="identiReg" placeholder="Identificación">
    <label>País <span>*</span></label>
    <select class="custom-select custom-select-lg mb-3" id="paisRegistro" name="paisRegistro">
        <option selected>Seleccione Pais</option>
        <option value="Colombia">Colombia</option>
    </select>
    <label>Ciudad <span>*</span></label>
    <input type="text" class="form-control input-lg" id="ciudadReg" name="ciudadReg" placeholder="Ciudad">
    <label>Dirección <span>*</span></label>
    <input autocomplete="false" type="text"
        title="Ingrese por favor la dirección" class="form-control" id="dirReg" name="dirReg" required
        placeholder="Dirección (Ubicación)" maxlength="100" aria-label="dirección">
</div>
<div class="row">
    <div class="form__btn">
        <a class="btn btnRegistro" onclick="regresar(2);">Regresar</a>
    </div>
    <p style="margin-left:2em"></p>
    <p style="margin-left:2em"></p>
    <button>Registrarse</button>
</div>

<label class="label-for-checkbox">
</label>
</form>