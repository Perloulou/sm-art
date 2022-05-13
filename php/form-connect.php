<?php

if (isset($_POST['login']) && isset($_POST['pswd'])) {

    if ($login_valide == $_POST['login'] && $pswd_valide == $_POST['pswd']) {
        session_start ();
    }

    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pswd'] = $_POST['pswd'];
}

