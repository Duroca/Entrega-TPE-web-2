<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:33:51
  from 'C:\xampp\htdocs\TPE-1er\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348681f1f7250_07180569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68239708a299ed6147691f2697d5bce09fccdfbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\home.tpl',
      1 => 1665689629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348681f1f7250_07180569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ruta'=>"Styles/"), 0, false);
?>
    <div class="home_top d_flex">
        <div>
            <h1>Nagel Muebles</h1>
        </div>
    </div>
    <div class="home_col centrar">
        <span></span>
        <h2>Muebles amigables con el planeta</h2>
        <p class="p_10">Nuestros muebles fabricados con madera reciclada de lapacho son excelentes para decorar tu ambiente o tu patio. con un estilo rustico y simple, nuestros muebles se amoldan a todos los gustos.</p>
        <div class="home_box1">
            <section class="centrar">
                <span></span>
                <h2>Cómo llegar</h2>
                <p>Avenida Avellaneda 376.</p>
            </section>
            <section class="centrar">
                <span></span>
                <h2>Horarios de atención</h2>
                <table>
                    <tr>
                        <td>Lun:</td>
                        <td>8:30–12:00, 16:00–20:30</td>
                    </tr>
                    <tr>
                        <td>Mar:</td>
                        <td>8:30–12:00, 16:00–20:30</td>
                    </tr>
                    <tr>
                        <td>Mié:</td>
                        <td>8:30–12:00, 16:00–20:30</td>
                    </tr>
                    <tr>
                        <td>Jue:</td>
                        <td>8:30–12:00, 16:00–20:30</td>
                    </tr>
                    <tr>
                        <td>Vie:</td>
                        <td>8:30–12:00, 16:00–20:30</td>
                    </tr>
                    <tr>
                        <td>Sáb:</td>
                        <td>8:30–12:30</td>
                    </tr>
                    <tr>
                        <td>Dom:</td>
                        <td class="c_red">Cerrado</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
