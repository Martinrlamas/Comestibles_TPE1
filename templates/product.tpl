{include file = "header.tpl"}

<div class="card text-center">
  <div class="card-header">
    {$product->categoria}
  </div>
  <div class="card-body">
    <h5 class="card-title">{$product->producto}</h5>
    <p class="card-text">${$product->precio}</p>
    <a href="products" class="btn btn-primary">Volver</a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

{include file = "footer.tpl"}