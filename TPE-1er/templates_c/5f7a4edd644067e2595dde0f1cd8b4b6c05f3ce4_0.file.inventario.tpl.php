<?php
/* Smarty version 4.2.1, created on 2022-10-06 16:45:35
  from 'C:\xampp\htdocs\TPE-1er\templates\inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633eea0fb00651_64240951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7a4edd644067e2595dde0f1cd8b4b6c05f3ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\inventario.tpl',
      1 => 1665067533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633eea0fb00651_64240951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="box_tabla">
    <table class="tabla_prod">
        <caption>Stock</caption>
        <th>Producto</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Descuento</th>
        <th>Imagen</th>
        <th></th>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_s']->value, 'mueble');
$_smarty_tpl->tpl_vars['mueble']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mueble']->value) {
$_smarty_tpl->tpl_vars['mueble']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mueble']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre_cat;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mueble']->value->descuento;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['mueble']->value->imagen;?>
</td>
                    <td></td>

                                    </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
