<?php


//Image de dresseurs
// image to string conversion Goguey
$filename='../images/enduit.png';
$imagelink = file_get_contents($filename);
$filetype = mime_content_type($filename);
echo  $filetype;
// image string data into base64
$encdata = base64_encode($imagelink);

// Output

echo '<img src="data:image/png;base64,' . $encdata . '"/>';
echo '<br>';

require_once 'config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}

$img = "data:" . $filetype . ";base64," . $encdata;
$query = $conn->prepare("UPDATE produit SET image = '$img' WHERE id_produit =14");
$query->execute(array('image' => $encdata));


