<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:55:46
  from 'C:\xampp\htdocs\TPE-1er\templates\productoPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c8bf29d4a82_61445692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6902aa9469fd48449595b26c562b373ed9cf62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-1er\\templates\\productoPage.tpl',
      1 => 1665960945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pedirCotizacion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c8bf29d4a82_61445692 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style1.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
</head>
<body>
    <header>
        <nav>
            <div class="d_flex nav_col_menu">
                <div class="menu_icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="d_flex nav_col_logo">
                <a href="../home" class="header_logo d_flex">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="50" height="50" viewBox="0 0 1080.000000 1080.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,1080.000000) scale(0.100000,-0.100000)" fill="#000" stroke="none">
                            <path d="M3140 5400 l0 -3470 545 0 545 0 2 2176 3 2177 394 -729 c217 -401 553 -1021 746 -1379 194 -357 526 -971 739 -1364 l386 -714 0 -84 0 -83 545 0 545 0 0 3470 0 3470 -545 0 -545 0 -2 -2239 -3 -2240 -244 452 c-448 827 -812 1502 -1420 2624 l-601 1112 0 145 0 146 -545 0 -545 0 0 -3470z m665 3287 c-31 -21 -471 -257 -478 -257 -4 0 -7 61 -7 135 l0 135 252 0 c212 0 249 -2 233 -13z m3605 -2984 c0 -1648 -2 -2994 -4 -2992 -4 4 -223 407 -657 1211 l-69 128 0 2325 0 2325 365 0 365 0 0 -2997z m-3362 2063 l-3 -764 -339 626 c-186 345 -334 628 -330 629 5 2 151 80 324 173 l315 170 17 -35 c17 -32 18 -84 16 -799z m560 -261 c187 -346 690 -1276 1116 -2064 l776 -1435 -2 -766 -3 -767 -184 341 c-102 188 -298 550 -436 806 -139 256 -358 661 -487 900 -129 239 -443 819 -697 1288 l-461 852 0 768 c0 751 1 766 19 737 10 -16 172 -313 359 -660z m-1152 218 c71 -131 233 -431 361 -668 l233 -430 0 -2257 0 -2258 -365 0 -365 0 0 2925 c0 1609 2 2925 4 2925 2 0 61 -107 132 -237z m3530 -4615 c161 -298 292 -543 291 -544 -15 -10 -567 -305 -579 -309 -17 -7 -18 31 -18 701 0 389 3 704 6 701 4 -4 139 -251 300 -549z m424 -838 l0 -160 -297 0 c-262 1 -295 3 -273 15 109 61 557 304 563 304 4 1 7 -71 7 -159z"/>
                        </g>
                    </svg>
                </a>
                <ul class="menu_options">
                    <li>
                        <a href="../home">Home</a>
                    </li>
                    <li>
                        <a href="../shop">Shop</a>
                    </li>
                    <li>
                        <a href="../about_us">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="d_flex nav_col_derecha">
                <ul>
                    <span></span>
                    <li>
                        <label class="dropdown">
                            <div class="dd-button">
                            </div>
                            <input type="checkbox" class="dd-input">
                            <ul class="dd-menu">
                                <li><div><a class="btn_cotizacion">Pedir cotización</a></div></li>
                                <li><div><a href="../login">Inicar Sesión</a></div></li>
                            </ul>
                        </label>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php $_smarty_tpl->_subTemplateRender("file:pedirCotizacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>

<div class="detalles_producto_page">
    <div>
        <h1><?php echo $_smarty_tpl->tpl_vars['mueble']->value->nombre;?>
</h1>
        <img src="../<?php echo $_smarty_tpl->tpl_vars['mueble']->value->imagen;?>
">
    </div>
    
    <div>
        <p>[Descripcion]</p>
    </div>
    
    <div>
    <h2>$<?php echo $_smarty_tpl->tpl_vars['mueble']->value->precio;?>
</h2>
    <?php if (($_smarty_tpl->tpl_vars['mueble']->value->descuento == 0)) {?>
        <p>Este producto no posee descuento</p>
    <?php } else { ?>
        <p>Este producto tiene <?php echo $_smarty_tpl->tpl_vars['mueble']->value->descuento;?>
% de descuento</p>
        <p>Precio final:</p>
        <h2>$<?php echo $_smarty_tpl->tpl_vars['precio_final']->value;?>
</h2>
    <?php }?>
    </div>
    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
