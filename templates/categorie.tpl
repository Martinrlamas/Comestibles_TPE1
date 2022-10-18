
{include file = "header.tpl"}

<div class="card text-center">
<div class="card-header">
</div>
<div class="card-body">
<ul class="list-group">
        {foreach from=$categorie item=$product}
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="product/{$product->id}" class="list-group-item list-group-item-action">{$product->producto} ${$product->precio}</a>
            </li>
        {/foreach}
    <a href="categories" class="btn btn-primary">Volver</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
        
{include file= "footer.tpl"}