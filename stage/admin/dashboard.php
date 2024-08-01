<?php
session_start();

if (isset($_SESSION['admin'])) {
    echo 'Bonjour, ' . htmlspecialchars($_SESSION['admin']);
} else {
    echo 'Vous n\'êtes pas connecté.';
}
?>
