<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:09:25
  from 'C:\xampp\htdocs\TPE-1er\templates\inventarioUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c8115a766d9_93437815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95cd436ff044909f77f71c1915bf420e9a84f4ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\inventarioUser.tpl',
      1 => 1665958163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c8115a766d9_93437815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ruta'=>"Styles/"), 0, false);
?>

<div class="d_flex menu_shop">
    <div class="dropdown_button menu_shop_option">
        <a>Categorias</a>
        <div>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    <li><a href="shop/<?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_cat;?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <div class="menu_shop_option"><a href="shop-all">Ver todo</a></div>
</div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias_s']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <div class="box_catalogo">
            <h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_cat;?>
</h3>
            <div class="productos_wrap">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_s']->value, 'mueble');
$_smarty_tpl->tpl_vars['mueble']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mueble']->value) {
$_smarty_tpl->tpl_vars['mueble']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['allProducts']->value) {?>
                        <?php if (($_smarty_tpl->tpl_vars['mueble']->value->nombre_cat == $_smarty_tpl->tpl_vars['categoria']->value->nombre_cat)) {?>
                            <div class="box_producto">
                                <div class="content_producto">
                                    <div class="title_producto"><?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre;?>
</div>
                                    <div class="img_producto">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['mueble']->value->imagen;?>
">
                                    </div>
                                    <div class="precio_producto">$<?php echo $_smarty_tpl->tpl_vars['mueble']->value->precio;?>
</div>
                                    <div class="button_comprar"><a href="detalles/<?php echo $_smarty_tpl->tpl_vars['mueble']->value->id;?>
">Comprar</a></div>
                                </div>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <div class="box_producto">
                            <div class="content_producto">
                                <div class="title_producto"><?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre;?>
</div>
                                <div class="img_producto">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['mueble']->value->imagen;?>
">
                                </div>
                                <div class="precio_producto">$<?php echo $_smarty_tpl->tpl_vars['mueble']->value->precio;?>
</div>
                                <div class="button_comprar"><a href="shop/<?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre;?>
">Comprar</a></div>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
