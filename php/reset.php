<?php
require_once 'config.php';

// Création d'un connection à la BD
try{
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e){
    die ("Failed: ".$e);
}


$query = file_get_contents('../db.sql');
$queries = preg_split('~^\([^)]*\)(*SKIP)(*F)|;~', $query);
array_pop($queries);
foreach ($queries as $req) {
    $res = $conn->query($req);
    if (!$res) die("Failed query: " . $req);
}