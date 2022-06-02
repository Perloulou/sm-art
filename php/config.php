<?php


// Configuration :
//  - language de la base
//  - nom du serveur de bd
//  - nom de la base

define("DB",
    "mysql:".
    "host=localhost;".
    "dbname=db");
// utilisateur de la base
define("USER", "doublea");
// mot de passe de la base
define("PWD", "triple");


/*try{
    $bdd = new PDO("mysql:host=localhost;dbname=db;charset=utf8","double","triple");
}
catch(PDOException $e){
    die('Erreur: '.$e->getMessage());
}*/


?>
