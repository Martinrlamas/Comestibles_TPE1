
{include file='header.tpl'}

<!--Formualrio edicion de productos-->

<form method="GET" acction ="productedit">
    <label>Producto:</label>
    <input type="text" name="producto" value="{$product->producto}"/>
    <label>Precio:</label>
    <input type="text" name="precio" value="{$product->precio}"/>
    <div>
        <select>
            {foreach from=$categoris item=$categori}
                <option name="categoria" value="{$product->id_categori}">{$categori->categoria}</option>
            {/foreach}
        </select>
    </div>
</form>

{include file='footer.tpl'}