
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Panier</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/panier.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">

    <link rel="icon" href="./images/logo.png">
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
                <a class="nav-link activel" href="./panier.php">Panier</a>
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

<main>
    <h2>Panier</h2>
    <div class="basket">

        <div class="basket-labels">
            <ul>
                <li class="item item-heading">Article</li>
                <li class="price">Prix</li>
                <li class="quantity">Quantité</li>
                <li class="subtotal">Sous-total</li>
            </ul>
        </div>
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="./images/pinceaux.png" alt="pinceaux reservoir" class="product-frame">
                </div>
                <div class="product-details">
                    <p class="product-name">Set de 3 pinceaux résevoir</p>
                    <p>Quantité:<span class="item-quantity">1</span></p>
                </div>
            </div>
            <div class="price">26.00</div>
            <div class="quantity">
                <input type="number" value="1" min="1" class="quantity-field">
            </div>
            <div class="subtotal">8.60</div>
            <div class="remove">
                <button>Remove</button>
            </div>
        </div>

        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                    <img src="./images/acrylique.png" alt="Peinture acrylique" class="product-frame">
                </div>
                <div class="product-details">
                    <p class="product-name">Coffret de tubes de peinture acrylique</p>
                    <p>Quantité:<span class="item-quantity">1</span></p>
                </div>
            </div>
            <div class="price">26.00</div>
            <div class="quantity">
                <input type="number" value="1" min="1" class="quantity-field">
            </div>
            <div class="subtotal">18.59</div>
            <div class="remove">
                <button>Remove</button>
            </div>

        </div>

        <div class="basket-module">
            <label for="promo-code">Entrer un code promotionel</label><br>
            <input id="promo-code" type="text" name="promo-code" maxlength="30" class="promo-code-field">
            <button class="promo-code-cta">Appliquer</button>
        </div>

    </div>

    <aside>
        <div class="summary">
            <div class="summary-total-items"><span class="total-items"></span> Articles dans votre panier</div>
            <div class="summary-subtotal">
                <div class="subtotal-title">Sous-total</div>
                <div class="subtotal-value final-value" id="basket-subtotal">27.19</div>
                <div class="summary-promo hide">
                    <div class="promo-title">Promotion</div>
                    <div class="promo-value final-value" id="basket-promo"></div>
                </div>
            </div>
            <div class="summary-delivery">
                <select name="delivery-collection" class="summary-delivery-selection">
                    <option value="0" selected="selected">Options de livraison</option>
                    <option value="first-class">Prioritaire + suivit </option>
                    <option value="second-class">Suivit</option>
                    <option value="signed-for">Sans suivit</option>
                </select>
            </div>
            <div class="summary-total">
                <div class="total-title">Total</div>
                <div class="total-value final-value" id="basket-total">32.59</div>
            </div>
            <div class="summary-checkout">
                <button class="checkout-cta">Checkout</button>
            </div>
        </div>
    </aside>

</main>
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

<script src="./js/panier.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/jquery.min.js"></script>

</body>
</html>