{include file="header.tpl" ruta="Styles/"}
<div class="d_flex menu_shop">
    <div class="menu_shop_option"><a href="shop-all">Ver todo</a></div>
    <div class="dropdown_button menu_shop_option">
        <a>Categorias</a>
        <div>
            <ul>
                {foreach from=$categorias_s item=cat}
                    <li><a href="{$cat->nombre_cat}">{$cat->nombre_cat}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>

{include file="footer.tpl"}