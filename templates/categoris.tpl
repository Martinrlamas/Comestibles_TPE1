{include file='header.tpl'}


<!-- Formulario de alta -->
{include file='form.insert.Products.tpl'}
<ul>
    {foreach from= $categoris item= $categori}
        <li>
        <a>{$categori->categoria}<a>
        </li>
    {/foreach}
</ul>


{include file='footer.tpl'}