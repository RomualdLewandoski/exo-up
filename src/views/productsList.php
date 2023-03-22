<?php
$db = getDb();

?>
<h2 class="mb-4">Products</h2>
<div class="text-center">
    <a href="/&?page=add">
        <button class="btn btn-outline-dark"><i class="fas fa-cart-plus"></i> Ajouter un produit</button>
    </a>
    <a href="/&?page=cat_manage">
        <button class="btn btn-warning"><i class="fas fa-cogs"></i> Gérer les catégories</button>
    </a>
</div>
<table class="table table-hover mt-5">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    
        <tr>
            <th scope="row"><?= $product->id ?></th>
            <td><?= "NAME"e ?></td>
            <td><?= "PRICE" ?>€</td>
            <td><?= "CAT-NAME" ?></td>
            <td>
                <a href="/&?page=read&productId=<?= "ID" ?>">
                    <button class="btn btn-primary" type="button"><i class="fa fa-bars" aria-hidden="true"></i> Lire
                    </button>
                </a>
                <a href="/&?page=edit&productId=<?= "ID" ?>">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i>
                        Modifier
                    </button>
                </a>
                <a href="/&?page=delete&productId=<?= "ID" ?>">
                    <button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i>
                        Supprimer
                    </button>
                </a>
            </td>
        </tr>
   
    </tbody>
</table>
