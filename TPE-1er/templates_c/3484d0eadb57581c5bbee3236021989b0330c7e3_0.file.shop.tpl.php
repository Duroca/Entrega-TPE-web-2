<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:16:24
  from 'C:\xampp\htdocs\TPE-1er\templates\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d1a89bb679_14262244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3484d0eadb57581c5bbee3236021989b0330c7e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\shop.tpl',
      1 => 1665782183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d1a89bb679_14262244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ruta'=>"Styles/"), 0, false);
?>
<div class="d_flex menu_shop">
    <div class="menu_shop_option"><a href="shop-all">Ver todo</a></div>
    <div class="dropdown_button menu_shop_option">
        <a>Categorias</a>
        <div>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias_s']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_cat;?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
