
{include file="header.tpl"}

<!--Formulario de alta-->
{include file="form.insert.Products.tpl"}

<!--Lista de productos generada dinamicamente con smarty-->
    <ul class="list-group">
        {foreach from=$products item=$product}
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="products/{$product->id}" class="list-group-item list-group-item-action">{$product->producto} ${$product->precio}</a>
                <div class="ml-auto">
                <a href='delete/{$product->id}' type="button" class="btn btn-outline-danger">Borrar</a>
                </div>
                <div>
                <a href='productedit/{$product->id}'  type="button" class="btn btn-outline-warning">Editar</a>
                </div>
            </li>
            
        {/foreach}
        
    </ul>
{include file="footer.tpl"}