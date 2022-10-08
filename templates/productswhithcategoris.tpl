
{include file= 'header.tpl'}


{foreach from=$categoriproducts item=$categoriproduct}
    <div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{$categoriproduct->nombre}</h5>
<h6 class="card-subtitle mb-2 text-muted">{$categoriproduct->categoria}</h6>
<p class="card-text">${$categoriproduct->precio}</p>
</div>
</div>
{/foreach}

{include file= 'footer.tpl'}