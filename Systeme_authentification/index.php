<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant_valide = 'admin';
    $password_valide = 'admin';

    
    if ($_POST['identifiant'] === $identifiant_valide && $_POST['password'] === $password_valide) {
        $_SESSION['logged_in'] = true;
        header('Location: secret.phtml');
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    include 'formulaire.phtml';
    exit();
}
?>