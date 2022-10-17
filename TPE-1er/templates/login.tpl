{include file="header.tpl" ruta="Styles/"}
<div class="login_form">
    <form action="verify-login" class="form-type1" method="post">
        <fieldset>
            <input type="text" name="userName" placeholder="Nombre de usuario">
        </fieldset>
        <fieldset>
            <input type="password" name="userPassword" placeholder="Contraseña">
        </fieldset>
        
        <div>error</div>
        <button type="submit">Iniciar Sesion</button>
        <button type="reset">Registrarse</button>
    </form>
</div>
{include file="footer.tpl"}