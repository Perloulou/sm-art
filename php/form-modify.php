<?php

session_start();

require_once 'config.php';

try{
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e){
    die ("Failed: ".$e);
}


$query = "UPDATE `client` SET `mdp` = ? WHERE `login` = ? ;";

$change = $conn->prepare($query);

if ($_POST['new_mdp'] == $_POST['new_mdp1']) {

    $change->execute([$_POST['new_mdp'], $_SESSION['login']]);

    $conn->query('KILL CONNECTION_ID()');

    header("location: ../modify.html?reg_err=success");
} else
    header("location: ../modify.html?reg_err=error");

?>