<div class="full_dark_screen d_flex hidden">
    <div class="form-type1">
        <svg class="btn_close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
        </svg>
        <form id="form_cotizacion">
            <fieldset>
                <input type="text" name="nombre" placeholder="Nombre y Apellido">
            </fieldset>
            <fieldset>
                <input type="number" name="telefono" placeholder="Número de teléfono" maxlength="20">
            </fieldset>
            <fieldset>
                <input type="email" name="email" placeholder="Correo electrónico">
            </fieldset>
            <fieldset>
                <input type="text" name="consulta" placeholder="Escriba su consulta aquí">
            </fieldset>
            <fieldset>
                <canvas id="captcha"></canvas>
                <input id="cpt_code" type="text" name="code" value="" placeholder="Escriba el código" maxlength="7">
            </fieldset>
            <button id="btn_submit" type="submit" name="enviar">Enviar</button>
        </form>
    </div>
</div>