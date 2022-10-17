{include file="headerAdmin.tpl"}

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
                {foreach from=$categorias_s item=categoria}
                    <tr>
                        <td>{$categoria->nombre_cat}</td>
                        <td>
                            <a href="delete-categoria/{$categoria->id}"><button id="{$categoria->id}" value="eliminar">Eliminar</button></a>
                        </td>
                    </tr>
                {/foreach}
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
                <select name="tf_categoria">
                    {foreach from=$categorias_s item=categoria}
                        <option value="{$categoria->id}">{$categoria->nombre_cat}</option>
                    {/foreach}
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
    <table class="tabla_prod">
        <caption>Stock</caption>
        <th>Producto</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Descuento</th>
        <th>Imagen</th>
        <th></th>
        <tbody>
            {foreach from=$productos_s item=mueble}
                <tr>
                    <td>{$mueble->nombre}</td>
                    <td>{$mueble->precio}</td>
                    <td>{$mueble->nombre_cat}</td>
                    <td>{$mueble->descuento}</td>
                    <td>
                        <img src="{$mueble->imagen}">
                    </td>
                    <td>
                        <button>Editar</button>
                        <a href="delete-mueble/{$mueble->id}"><button id="{$mueble->id}" value="eliminar">Eliminar</button></a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
