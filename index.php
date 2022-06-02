
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SM'Art</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
</head>
<body>


<header>

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
</header>

<main>

    <H2>Acceuil</H2>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="./images/img1.jpg" alt="reduction bienvenue" class="slide-img" style="width:100%">
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="./images/img2.jpg" alt="cadeau fusain" class="slide-img" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="./images/img3.jpg" alt="cadeau tote bag" class="slide-img" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)" autofocus></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <p>
        <?php

        // On prolonge la session
        session_start();
        // On teste si la variable de session existe et contient une valeur
        if($_SESSION['login']==true){
            echo 'Bonjour '.$_SESSION['login'].', vous êtes connecté !';
            echo '<p><button class="btn-deco"><a href="./php/form-deconnexion.php">Se deconnecter</a></button></p>';
        }
        elseif($_SESSION['login']==false)
            echo "Vous n'êtes pas connecté";

        ?>
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt est nec dignissim ultrices.
        Donec odio odio, rhoncus vitae neque sagittis, pretium euismod dolor. Duis vitae risus mauris.
        Duis lacus erat, facilisis sed lorem sed, facilisis bibendum elit.
        Curabitur ac turpis vehicula odio aliquet mollis eget non odio. Etiam interdum sapien nec leo interdum molestie.
        Donec vel purus id lectus vestibulum hendrerit quis mattis ante. In nulla quam, auctor ut maximus in, convallis non justo.
        Duis bibendum porta massa, nec dictum nunc sagittis sed. Donec et enim ac nisl scelerisque mattis.
        Mauris sit amet nunc ut ligula bibendum eleifend non sit amet nisi.
        Phasellus vel sapien ut velit dapibus egestas ut vestibulum massa. Nulla sed laoreet quam, vel varius turpis.
    </p>

    <p>Nunc bibendum euismod sem vel molestie. Sed magna lectus, iaculis lacinia erat id, faucibus commodo magna. Duis laoreet scelerisque egestas. Nulla facilisi. Nam scelerisque tortor eu nibh placerat consequat. Etiam sed neque sit amet tellus vehicula varius nec eget est. Proin sagittis metus lectus, eget viverra erat posuere ullamcorper. Duis molestie justo eu sapien sagittis vestibulum. Aliquam nec nibh sodales diam posuere scelerisque ut quis dolor. Nam eleifend mauris vitae vulputate vulputate.</p>
    <p>Suspendisse blandit pulvinar nisl, a hendrerit eros aliquet ut. Cras eget commodo est, porttitor porttitor felis. Praesent vel pharetra nunc. Aenean efficitur odio vel nulla commodo, sed elementum turpis ornare. Pellentesque ornare ligula at augue molestie faucibus sit amet laoreet sapien. Nunc at elit mauris. Pellentesque lobortis viverra ligula, ut suscipit ligula consectetur at. Phasellus ac ultricies erat. Praesent accumsan nulla risus, id vulputate lacus euismod id. Nullam quis ante sit amet tellus vulputate sollicitudin. Pellentesque aliquet lectus sed lectus dignissim sagittis. Proin elit metus, faucibus porta posuere nec, ornare eu arcu. Aliquam dapibus ac velit non facilisis. Aliquam sed luctus diam, in sollicitudin arcu.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget porttitor ligula. In vel orci vitae mi efficitur bibendum quis non dui. Cras interdum congue augue. Ut nec mauris risus. Aliquam faucibus elit quis posuere placerat. Sed vitae tellus eu purus finibus rhoncus. Nullam convallis sollicitudin neque et accumsan. Vestibulum consequat purus dignissim nisi pellentesque aliquet. Mauris auctor consequat eros, interdum tristique massa fermentum sit amet. Nam pellentesque nulla justo, in iaculis dolor molestie nec. Nam vel magna vitae elit faucibus malesuada. Aliquam pulvinar commodo erat, in fringilla turpis maximus vel. Morbi lorem ex, ultrices eu lobortis vitae, sodales non urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <p>Praesent nec euismod purus, ac ultricies ipsum. Suspendisse suscipit ultricies risus, tempor tempus dui auctor ac. Sed sapien nisi, consequat ac augue nec, egestas tristique ligula. Donec laoreet lectus nec ultricies venenatis. Nulla tempor pretium est non vehicula. Praesent ac erat consectetur, sodales diam ac, feugiat tortor. Donec gravida mattis volutpat. Cras ut orci ut elit tristique maximus vitae tristique tellus. Vestibulum tincidunt sed libero et posuere. Nulla egestas justo quam, non venenatis quam scelerisque vel. Quisque magna libero, faucibus ut leo quis, facilisis venenatis mi. Etiam ullamcorper maximus ante, sed maximus lectus. Donec molestie felis id mi tempor cursus.</p>
    <p>Curabitur mattis urna ac euismod elementum. Pellentesque et mollis augue. Nulla ornare tortor in elit lobortis cursus. Fusce eget rhoncus mauris. Donec condimentum consequat tellus, a rutrum felis dictum et. Curabitur tempor metus sed ante laoreet, eget ullamcorper tellus vehicula. Donec sapien neque, tempus et ligula eget, consectetur dapibus odio. Integer sollicitudin quis libero a consectetur.</p>
    <p>In eget libero enim. In ut velit turpis. Morbi in libero urna. Vestibulum sapien erat, lobortis sed tortor ut, convallis cursus elit. Proin et lorem nec enim eleifend luctus in eu ipsum. Pellentesque faucibus nisl non magna tristique mollis. Aliquam at pellentesque nulla. Aliquam bibendum feugiat faucibus. Donec elit tortor, rhoncus interdum urna quis, vestibulum imperdiet metus. Morbi ut enim ipsum. Nam condimentum sed metus sed pretium. Morbi dapibus ultricies massa quis pharetra. Nam vel ligula eu eros tristique luctus.</p>
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

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./js/index.js"></script>


</body>
</html>

