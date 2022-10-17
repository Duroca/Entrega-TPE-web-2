<?php
/* Smarty version 4.2.1, created on 2022-10-05 00:08:32
  from 'C:\xampp\htdocs\TPE-1er\templates\tablaHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633caee0111351_25186632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdd114e4fdec1c6b667e8bf41da8dc6807cdc841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\tablaHome.tpl',
      1 => 1664921310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633caee0111351_25186632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="box_tabla">
    <table class="tabla_prod">
        <caption>
            Stock
        </caption>
        <th>Producto</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Descuento</th>
        <th></th>
        
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
