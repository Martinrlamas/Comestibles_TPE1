<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Products</title>
</head>
<body>
    {* <form>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Producto</label>
        <input type="email" class="form-control" id="inputProducts" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="number" class="form-control" id="InputPrecio">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> *}
    <form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Producto</label>
                <input name="Producto" type="text" class="form-control">
                <label>Precio</label>
                <input name="Price" type="number" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="priority" class="form-control">
                   {foreach from=$categoris item=$categori}
                    <option value="{$categori->id}">{$categori->categoria}</option>
                   {/foreach}
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>