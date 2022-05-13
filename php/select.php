<?php

// Chargement des identifiants
require_once 'config.php';

// Création d'un connection à la BD
try{
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e){
    die ("Failed: ".$e);
}


// REQUETE SELECT
$query = "SELECT * FROM produit";
$res = $conn->query($query);
//    // Vérification de la requête
if (!$res) die("Failed query: " . $query);
$rows = $res->fetchAll();
echo '<pre>';
var_dump($rows);
echo '</pre>';


echo "<h3>Affiche Table</h3>";
function affichetab($db) {
    echo "<table>";
    echo "<tr>";
    echo "<th>num</th>";
    echo "<th>nom</th>";
    echo "<th>marque</th>";
    echo "<th>prix</th>";
    echo "<th>stock</th>";
    echo "<th>categorie</th>";
    echo "<th>image</th>";
    echo "</tr>";

    for ($k=0; $k<sizeof($rows); $k++) {
        echo "<tr>";
        echo '<td>'.$rows[$k]['num'].'</td>';
        echo '<td>'.$rows[$k]['nom'].'</td>';
        echo '<td>'.$rows[$k]['marque'].'</td>';
        echo '<td>'.$rows[$k]['prix'].'</td>';
        echo '<td>'.$rows[$k]['stock'].'</td>';
        echo '<td>'.$rows[$k]['categorie'].'</td>';
        echo '<td>'.$rows[$k]['image'].'</td>';
        echo "</tr>";
    }
    echo "</table>";
}
affichetab($rows);