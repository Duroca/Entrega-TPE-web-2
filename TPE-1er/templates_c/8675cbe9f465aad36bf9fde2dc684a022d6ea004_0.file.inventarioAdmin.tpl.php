<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:27:56
  from 'C:\xampp\htdocs\TPE-1er\templates\inventarioAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e011cc14941_33178189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8675cbe9f465aad36bf9fde2dc684a022d6ea004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\inventarioAdmin.tpl',
      1 => 1666056474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
  ),
),false)) {
function content_634e011cc14941_33178189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="box_form_tabla">
    <h4>Agregar Categoria</h4>
    <form method="post" action="submit-categoria">
        <ul class="d_flex_column">
            <li>
                <input type="text" name="tf_new_categoria" placeholder="Categoria" required>
            </li>
            <button class="btn_form_admin">Agregar</button>
        </ul>
    </form>
    <div id="tabla_categorias">
        <table class="tabla_prod">
            <caption>Categoria</caption>
            <th>Nombre</th>
            <th></th>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias_s']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_cat;?>
</td>
                        <td>
                            <a href="delete-categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" value="eliminar">Eliminar</button></a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <h4>Agregar Mueble</h4>
    <form id="data_form_stock" method="post" action="submit-mueble" enctype="multipart/form-data">
        <ul class="d_flex_column">
            <li>
                <input type="text" name="tf_producto" placeholder="Producto" required>
            </li>
            <li>
                <input type="number" name="tf_valor" placeholder="Valor" required>
            </li>
            <li>
                <input type="number" name="tf_descuento" placeholder="Descuento" required>
            </li>
            <li>
                <select name="tf_categoria" id="select_categoria">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias_s']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_cat;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </li>
            <li>
                <input type="file" name="tf_imagen" accept="image/png, image/jpg, image/jpeg" required>
            </li>
            <button class="btn_form_admin" id="btn_agregar">Agregar</button>
        </ul>
    </form>
</div>
<div id="box_tabla">
    <table class="tabla_prod" id="tabla_productos">
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
                        <td>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['mueble']->value->imagen;?>
">
                        </td>
                        <td>
                            <button type="button" class="btn_editar" id="<?php echo $_smarty_tpl->tpl_vars['mueble']->value->id;?>
">Editar</button>
                            <a href="delete-mueble/<?php echo $_smarty_tpl->tpl_vars['mueble']->value->id;?>
"><button id="<?php echo $_smarty_tpl->tpl_vars['mueble']->value->id;?>
" value="eliminar">Eliminar</button></a>
                        </td>
                    
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="Javascript/admin_form.js"><?php echo '</script'; ?>
>
<?php }
}
