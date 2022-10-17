
{include file='header.tpl'}

<!--Formualrio edicion de productos-->

<form method="POST" action ="insertedit">
    <label>Producto:</label>
    <input type="text" name="producto" value="{$product->producto}"/>
    <label>Precio:</label>
    <input type="text" name="precio" value="{$product->precio}"/>
    <div>
        <select>
             {foreach from=$categoris item=$categori}
                <option name="categoria" value="{$categori->id}">{$categori->categoria}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
</form>

{include file='footer.tpl'}
