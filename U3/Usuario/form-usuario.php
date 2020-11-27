<form method="post" onsubmit="return validarUsuario();">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="col-md-12">
        <label onclick="mostrarAyuda('nombre');">Nombre completo:</label>
        <input type="text" name="nombre" id="nombre"
            value="<?php echo $nombre ?>"
            class='form-control' maxlength="100" required>
    </div>

    <div class="col-md-12">
        <label onclick="mostrarAyuda('contra');">Contraseña:</label>
        <input type="password" name="contra" id="contra"
            value="<?php echo $contra ?>"
            class='form-control' maxlength="100" required 
            placeholder="contraseña">
    </div>

    <div class="col-md-12">
        <label onclick="mostrarAyuda('tel');">Teléfono:</label>
        <input type="text" name="tel" id="tel"
            value="<?php echo $tel ?>"
            class='form-control' maxlength="10" required>
            <!-- placeholder="###-###-####" -->
    </div>

    <div class="col-md-12">
        <label>Correo electrónico:</label>
            <input type="email" name="email" id="email"
            value="<?php echo $email ?>"
            class='form-control' maxlength="30" >
    </div>

    <div class="col-md-12">
        <label>Notas:</label><br/>
        <textarea name="notas" id="notas" class='formcontrol' maxlength="255" cols="40" rows="5"><?php echo $notas ?></textarea>
    </div>

    <div class="col-md-12 pull-right">
        <button type="submit" class="btn btn-success">
            Guardar datos
        </button>
    </div>
</form>