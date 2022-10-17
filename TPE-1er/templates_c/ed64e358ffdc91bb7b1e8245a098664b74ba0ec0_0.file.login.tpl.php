<?php
/* Smarty version 4.2.1, created on 2022-10-15 16:02:42
  from 'C:\xampp\htdocs\TPE-1er\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634abd82e36c71_23296033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed64e358ffdc91bb7b1e8245a098664b74ba0ec0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\login.tpl',
      1 => 1665842561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634abd82e36c71_23296033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ruta'=>"Styles/"), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
