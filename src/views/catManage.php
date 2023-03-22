<?php
$db = getDb();


?>
<h2 class="mb-4">Gestion des catégories</h2>
<div class="text-center">
    <a href="/">
        <button class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Retour à la liste des produits</button>
    </a>
    <a href="/&?page=add">
        <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> Ajouter un produit</button>
    </a>
</div>
<div class="card mt-4">
    <div class="card-header">Ajouter une categorie</div>
    <form method="post" action="/&?page=cat_manage&action=add_cat">
        <div class="card-body">
            <div class="form-group row">
                <label for="nameCat" class="col-sm-2 col-form-label">Nom de la catégorie</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameCat" name="nameCat" placeholder="catégorie">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Ajouter la catégorie</button>
            <button class="btn btn-danger" type="reset"><i class="fas fa-trash"></i> Reset</button>
        </div>
    </form>
</div>


<table class="table table-hover mt-5">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    
        <tr>
            <form action="/?&page=cat_manage&action=cat_edit" method="post">
                <input type="hidden" name="catId" value="<?= "ID" ?>">
                <th scope="row"><?= "ID" ?></th>
                <td><input type="text" class="form-control" name="catName" value="<?= "NAME" ?>"></td>
                <td>
                    <button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i>
                        Modifier
                    </button>
                </td>
            </form>
        </tr>
    
    </tbody>
</table>
