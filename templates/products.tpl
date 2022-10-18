
{include file="header.tpl"}

<!--Formulario de alta-->
{if $admin}
    {include file="form.insert.Products.tpl"}
{/if}

<!--Lista de productos generada dinamicamente con smarty-->
    {* <ul class="list-group">
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
        
    </ul> *}
    <table class="table table-dark table-striped">
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Accion</th>

            </tr>
    </thead>
    <tbody>
    {foreach from=$products item=$product key=$cuantos}
            
        <a href="products/{$product->id}">
        <tr>
            <th scope="row">{$cuantos}</th>
            <td>{$product->producto}</td>
            <td>${$product->precio}</td>
            <td>{$product->categoria}</td>
            <td class="d-grid gap-2 d-md-flex justify-content-md-end">
            {if $admin}
                <div>
                <a href='deleteproduct/{$product->id}' type="button" class="btn btn-outline-danger">Borrar</a>
                </div>
                <div>
                <a href='productedit/{$product->id}'  type="button" class="btn btn-outline-warning">Editar</a>
                </div>
            {/if}
                <div>
                <a href="products/{$product->id}" type="button" class="btn btn-outline-info">Info</a>
                </div>
            </td>
        </tr>
        </a>
    {/foreach}
    </tbody>
</table>
{include file="footer.tpl"}