<?php

if (!(isset($_POST["mail"]) &&
    $_POST["mail"] != "" &&
    isset($_POST["login"]) &&
    $_POST["login"] != "" &&
    isset($_POST["mdp"]) &&
    $_POST["mdp"] != "" &&
    isset($_POST["nom"]) &&
    $_POST["nom"] != "" &&
    isset($_POST["prenom"]) &&
    $_POST["prenom"] != "" &&
    isset($_POST["send"]) &&
    $_POST["send"] == "Ajouter"
)) {
    header("Location: ../inscription.html");
}
$m = $_POST["mail"];
$l = $_POST["login"];
$p = $_POST["mdp"];
$o = $_POST["prenom"];
$n = $_POST["nom"];

require_once 'config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}

$p = password_hash($p, PASSWORD_DEFAULT);

if(password_verify($_POST["pswd"], $p)) echo "OK";

$query = $conn->prepare("INSERT INTO `client` (`login`, `mdp`, `nom`, `prenom`, `email`) VALUES(:login, :mdp, :nom, :prenom, :email)");
$query->execute(array('login' => $l, 'mdp' => $p, 'nom' => $n, 'prenom' => $o, 'email' => $m));
if (!$query) die("Failed query: " . $query);


