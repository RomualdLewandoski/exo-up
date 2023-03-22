<?php

?>
<h2 class="mb-4">Lecture du produit : <?= "NAME" ?> </h2>
<div class="text-center">
    <a href="/">
        <button class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Retour à la liste des produits</button>
    </a>
    <a href="/&?page=add">
        <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> Ajouter un produit</button>
    </a>
</div>
<div class="card mt-5">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4 border-right">
                <span class="font-weight-bolder">Nom du produit: </span><?= "NAME" ?><br>
                <span class="font-weight-bolder">Catégorie: </span><?= "CATNAME" ?><br>
                <span class="font-weight-bolder">Prix: </span><?= "PRICE" ?>€ <br>
                <span class="font-weight-bolder">Date d'ajout: </span><?= "CREATED" ?> <br>
                <span class="font-weight-bolder">Date modif: </span><?= "MODIFIED" ?> <br>
            </div>
            <div class="col-sm-7">
                <?= "DESCRIPTION" ?>
            </div>
        </div>
    </div>
</div>
