<?php
// On prolonge la session
session_start();

// Détruire la session.
if (session_destroy()) {
    // Redirection vers la page de connexion
    header("Location: ../index.php");
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Deconnexion</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connexion.css">


</head>
<body>
