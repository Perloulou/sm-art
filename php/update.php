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

// REQUETE UPDATE
$query = <<<EOT
    UPDATE produit
    SET `prix`='21.2' 
    WHERE
    `id_produit`='6';
  EOT;
$res = $conn->query($query);
// Vérification de la requête
if (!$res) die("Failed query: " . $query);

// Fermeture de la connection
$conn->query('KILL CONNECTION_ID()');
$conn = null;

?>