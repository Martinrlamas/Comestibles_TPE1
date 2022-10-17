
{include file='header.tpl'}

<!--Formualrio edicion de productos-->

<form method="POST" action ="insertproductedit">
    <label>Producto:</label>
    <input type="text" name="producto" value="{$product->producto}" required/>
    <label>Precio:</label>
    <input type="number" min="1" name="precio" value="{$product->precio}" required/>
    <div>
        <select name="categoria" class="form-control">
             {foreach from=$categoris item=$categori}
                <option value="{$categori->id}">{$categori->categoria}</option>
            {/foreach}
        </select>
    </div>
    <input type="hidden" name="id_producto" value="{$product->id}">
    <button type="submit" class="btn btn-success">Editar</button>
</form>

{include file='footer.tpl'}
