<?php


require_once 'config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO(DB, USER, PWD);
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}

session_start();
$error_msg="";
if(isset($_SESSION['login'])){
    header('Location: ../index.php');
}

$_SESSION["error"] = ""; //login incorrect
if(isset($_POST['login'])) {



    $query = 'SELECT mdp, login FROM client WHERE login = ?;';
    $reqSub = $conn->prepare($query);
    $res = $reqSub->execute([$_POST['login']]);
    $conn->query('KILL CONNECTION_ID()');
    if (!$res) {
        //echo 'erreur 1';
    }
    else {
        $row = $reqSub->fetchAll();

        if (isset($row[0]['mdp'])) {
            if ($_POST["mdp"] == $row[0]['mdp']) {
                $_SESSION["login"] = $row[0]['login'];

                //echo "marche pas";
                header('Location: ../index.php');
                exit();
            }

            else {
                   header('location: ../connexion.php?reg_err=password');
                }
            } else {
            header('location: ../connexion.php?reg_err=login');
            }
        }
    }
    else {
        header('location: ../connexion.php?reg_err=login');
}

?>

