{include file='header.tpl'}


<!-- Formulario de alta -->
{include file='form.tpl'}
<ul>

{foreach from= $categoris item= $categori}
    <li>
    <a>{$categori->categoria}<a>
    </li>
{/foreach}


{include file='footer.tpl'}