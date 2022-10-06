
{include file="header.tpl"}

<!--Lista de productos generada dinamicamente con smarty-->
    <ul class="list-group">
        {foreach from=$products item=$product}
            <li class="">
            <a href="home/{$product->id_producto}" class="list-group-item list-group-item-action">{$product->nombre} ${$product->precio}</a>
            </li>
            
        {/foreach}
    </ul>
{include file="footer.tpl"}