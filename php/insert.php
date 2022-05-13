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

// REQUETE INSERT
$query = <<<EOT
    INSERT INTO `produit`
    (`nom`, `marque`, `prix`, `stock`, `categorie`, `image`)
    VALUES
    ('Nom1',  'marque1', 56, 6, 'peinture', NULL);
  EOT;

$res = $conn->query($query);
// Vérification de la requête
if (!$res) die("Failed query: " . $query);

// Fermeture de la connection
$conn->query('KILL CONNECTION_ID()');
$conn = null;

?>