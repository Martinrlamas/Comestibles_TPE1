
{include file="header.tpl"}

<!--Formulario de alta-->
{include file="form.tpl"}

<!--Lista de productos generada dinamicamente con smarty-->
    <ul class="list-group">
        {foreach from=$products item=$product}
            <li class="">
            <a href="products/{$product->id}" class="list-group-item list-group-item-action">{$product->producto} ${$product->precio}</a>
            </li>
            
        {/foreach}
        
    </ul>
{include file="footer.tpl"}