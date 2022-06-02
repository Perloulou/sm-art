<?php
require_once 'config.php';
// Création d'un connection à la BD


$imgs = array(
    array('path' => '../images/gobelet.png', 'id_produit' => 1),
    array('path' => '../images/palette_plastique.png', 'id_produit' => 2),
    array('path' => '../images/pinceaux.png', 'id_produit' => 3),
    array('path' => '../images/palette.png', 'id_produit' => 4),
    array('path' => '../images/carnet.png', 'id_produit' => 5),
    array('path' => '../images/acrylique.png', 'id_produit' => 6),
    array('path' => '../images/crayons.png', 'id_produit' => 7),
    array('path' => '../images/enduit.png', 'id_produit' => 14)
);

for ($k = 0; $k < sizeof($imgs); $k++) {
    $filename = $imgs[$k]['path'];

    echo $filename . '<br>';

    $img = file_get_contents($filename);
    $encdata = base64_encode($img);
//    // Output
    echo '<img src="data:image/png;base64,' . $encdata . '"/>';
    echo '<br>';
    try{
        $conn = new PDO(DB, USER, PWD);
        // Vérification de la connection
    } catch (PDOException $e){
        die ("Failed: ".$e);
    }

    $query = $conn->prepare("UPDATE produit SET image = ? WHERE id_produits = ?");
    $query->execute(array('image' => $encdata));

    $query->execute(array($img, $imgs[$k]['id_produit']));
    $conn->query('KILL CONNECTION_ID()');
    $conn = null;
}





