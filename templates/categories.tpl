{include file='header.tpl'}


<!-- Formulario de alta -->

{* {if} *}
{include file='form.insert.Categorie.tpl'}
{* {/if} *}


    {foreach from= $categories item= $categorie}
    <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$categorie->categoria}</h5>
                <a href="categories/{$categorie->id}" class="btn btn-primary">Mas</a>
                {* {if} *}
                <a href="categoriedit/{$categorie->id}" class="btn btn-primary">Editar</a>
                <a href="deletecategorie/{$categorie->id}" type="button" class="btn btn-outline-danger">Borrar</a>
                {* {/if} *}
            </div>
    </div>        
    {/foreach}

{include file='footer.tpl'}