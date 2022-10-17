{include file='header.tpl'}

<!--Formualrio edicion de productos-->

<form method="POST" action ="insertcategoriedit">
    <label>Nuevo nombre de la Categoria:</label>
    <input type=text name="categoria" value={$categorie->categoria}>
    <input type="hidden" name="id" value="{$categorie->id}">
    <button type="submit" class="btn btn-success">Editar</button>
</form>

{include file='footer.tpl'}