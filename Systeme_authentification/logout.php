<?php
session_start();


if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    session_destroy();
}


header('Location: formulaire.phtml');
exit();
?>