<?php

// Faire une requête pour récupérer les infos du produit en BDD grâce à l'id_produit qui est dans le formulaire en hidden

// Faire une fonction qui va créer session panier vide (function.php)

// faire une function qui ajoute un produit dans le panier (function.php)

// faire une function qui calcule le total du panier (function.php)

?>


<?php require_once 'common/header.php'; ?>

<h1 class="text-center fst-italic h1 text-uppercase">Panier</h1>
<!-- Afficher le contenu du panier -->

<div class="container">
    <div class="row">
        <div class="col-10 m-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                    </tr>
                </thead>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <th colspan="3" class="text-end">
                    Montant total : 300 €
                </th>
                <tr>
                    <td colspan="3" class="">
                        <a href="boutique.php" class="btn btn-primary">Continuer mes achats</a>
                        <a href="commande.php" class="btn btn-success">Valider ma commande</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>



<?php require_once 'common/footer.php'; ?>