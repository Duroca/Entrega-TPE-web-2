{include file="header.tpl" ruta="Styles/"}

<div class="d_flex menu_shop">
    <div class="dropdown_button menu_shop_option">
        <a>Categorias</a>
        <div>
            <ul>
                {foreach from=$all_categorias item=cat}
                    <li><a href="shop/{$cat->nombre_cat}">{$cat->nombre_cat}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="menu_shop_option"><a href="shop-all">Ver todo</a></div>
</div>
    {foreach from=$categorias_s item=categoria}
        <div class="box_catalogo">
            <h3>{$categoria->nombre_cat}</h3>
            <div class="productos_wrap">
                {foreach from=$productos_s item=mueble}
                    {if $allProducts}
                        {if ($mueble->nombre_cat == $categoria->nombre_cat)}
                            <div class="box_producto">
                                <div class="content_producto">
                                    <div class="title_producto">{$mueble->nombre}</div>
                                    <div class="img_producto">
                                        <img src="{$mueble->imagen}">
                                    </div>
                                    <div class="precio_producto">${$mueble->precio}</div>
                                    <div class="button_comprar"><a href="detalles/{$mueble->id}">Comprar</a></div>
                                </div>
                            </div>
                        {/if}
                    {else}
                        <div class="box_producto">
                            <div class="content_producto">
                                <div class="title_producto">{$mueble->nombre}</div>
                                <div class="img_producto">
                                    <img src="{$mueble->imagen}">
                                </div>
                                <div class="precio_producto">${$mueble->precio}</div>
                                <div class="button_comprar"><a href="shop/{$mueble->nombre}">Comprar</a></div>
                            </div>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
    {/foreach}

{include file="footer.tpl"}