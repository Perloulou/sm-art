<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">


</head>
<body>

<!-- Barre de navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="navbar-brand"><a href="./index.php"><img id="logo" src="./images/logo.png" alt="logo site"></a></div>

    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="navbar-nav mr-auto">
            <div class="nav-item">
                <a class="nav-link" href="./index.php">Acceuil</a>
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
                <a class="nav-link  activel" href="./connexion.php">Connexion</a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="./inscription.html">Inscription</a>
            </div>
        </div>

    </div>
</nav>

<h2>Connexion</h2>
<!-- Fin de la barre de navigation -->

<div class="connexion">
    <form id="form1" method="POST" action="./php/form-connect.php">

        <p>
            <label for="login">Login</label><br>
            <input id="login" type="text" name="login" placeholder="login"/>
        </p>

        <p>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" name="mdp" placeholder="mot de passe"/>
        </p>

        <div>
            <button type="submit" class="submit">Connexion</button>
        </div>

    </form>
</div>

<?php
if (isset($_GET['reg_err'])){
    $err = htmlspecialchars($_GET['reg_err']);

    switch($err){
    case 'password':
        ?>
        <script>
            window.onload = function(){
                mdp();
            }
        </script>

    <?php
    break;
    case 'login' :
    ?>
        <script>
            window.onload = function(){
                login();
            }
        </script>
    <?php
    }
}
?>


<div class="lien">
    <a class="lien"  href="./inscription.html">Inscription</a>
</div>

<div class="lien">
    <a class="lien"  href="./modify.html">Mot de passe oublié ?</a>
</div>

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
<script src="./js/erreur.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>