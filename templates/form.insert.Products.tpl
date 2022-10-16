<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Products</title>
</head>
<body>
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>Producto</label>
                <input name="producto" type="text" class="form-control" required>
                <label>Precio</label>
                <input name="precio" type="number" min="1" class="form-control" required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                   {foreach from=$categoris item=$categori}
                    <option value="{$categori->id}">{$categori->categoria}</option>
                   {/foreach}
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>