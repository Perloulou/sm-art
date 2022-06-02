<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="icon" href="./images/logo.png">


</head>

<!-- Barre de navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="navbar-brand"><a href="./index.php"><img id="logo" src="./images/logo.png" alt="logo site"></a></div>

    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="navbar-nav mr-auto">
            <div class="nav-item">
                <a class="nav-link activel" href="./index.php">Acceuil</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./shop.html">Boutique</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./panier.php">Panier</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./contact.html">Contact</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./connexion.php">Connexion</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./inscription.html">Inscription</a>
            </div>
        </div>

    </div>
</nav>


<!-- Fin de la barre de navigation -->
<h2>Boutique</h2>
<div class="sort">
    <div class="container">
        <label>Filter par:</label>
        <div class="filter-controls">
                <button class="active" data-filter="*">Montrer tous</button>
                <button data-filter="peinture">Peinture</button>
                <button data-filter="crayons">Crayons</button>
                <button data-filter="papier">Papier</button>
                <button data-filter="accessoires">Accessoires</button>
        </div>
    </div>


    <div class="container">
        <label>Trier par</label>
        <div class="sort-controls">
            <button class="active" data-sort=".product-name">Nom A-Z</button>
            <button data-sort=".product-marque">Marque</button>
            <button data-sort=".product-price">Prix</button>
        </div>
    </div>

</div

<?php
require_once './php/config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}



$query = "SELECT * FROM produit";
$res = $conn->query($query);
if (!$res) {
    die ("Failed query: " . $query);
}
$rows = $res->fetchAll();

for ($k = 0; $k < sizeof($rows); $k++) {
    $ligne=$rows[$k];
    $img=base64_encode($ligne['image']);

    echo <<< EOT
        <section class="container">
               
            <div class="product-list filter-list row">
        
                <div class="product {$ligne["categorie"]} col-3">
                    <div class="product_img">
                        <img class="img-responsive" alt="photo {$ligne["image"]}" src="data:image/png;base64,{$img}" />
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">{$ligne["nom"]}</h3>
                        <h4 class="product-marque">{$ligne["marque"]}</h4>
                        <p class="product-price">{$ligne["prix"]}</p>
                        <p><button class="btn-shop">Ajouter au Panier</button></p>
                    </div>
                </div>
            </div>
        </section>
    
    EOT;
}

?>

<footer>
    <p>Rejoignez-nous</p>
    <div class="row liens">
        <div class="col-3" >
            <a href="http://facebook.com" target="_blank"><img src="./images/facebook.svg" class="footer_img" alt="logo_facebook"></a>
        </div>

        <div class="col-3" >
            <a href="http://pinterest.fr" target="_blank"><img src="./images/pinterest.svg" class="footer_img" alt="logo_pinterest"></a>
        </div>

        <div class="col-3" >
            <a href="http://twitter.com" target="_blank"><img src="./images/twitter.svg" class="footer_img" alt="logo_twitter"></a>
        </div>

        <div class="col-3" >
            <a href="http://instagram.com" target="_blank"><img src="./images/instagram.svg" class="footer_img" alt="logo_instagram"></a>
        </div>
    </div>
    <p>©Copyright 2021. Tous droits réversés.</p>
</footer>

<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./js/shop.js"</script>
<script src="./lib/tinysort.js"></script>
<script src="./lib/sweetalert/sweetalert2.min.js"></script>
</body>
</html>