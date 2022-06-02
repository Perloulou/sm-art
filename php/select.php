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

    /*for ($k=0; $k<sizeof($rows); $k++) {

        echo <<<EOT
        <tr>
        <td>{$rows['id_produit']}</td>
        <td>{$rows['nom']}</td>
        <td>{$rows['marque']}</td>
        <td>{$rows['prix']}</td>
        <td>{$rows['stock']}</td>
        <td>{$rows['categorie']}</td>
        <td>{$rows['image']}</td>
        </tr>
    }
    EOT;
    echo "</table>";*/
}
affichetab($rows);