<?php
$metier = $_GET['metier'] ?? '';

switch($metier) {
    case 'jardinage':
        include 'formulaires/jardinage.php';
        break;
    case 'peinture':
        include 'formulaires/peinture.php';
        break;
    case 'plomberie':
        include 'formulaires/plomberie.php';
        break;
    case 'electricite':
        include 'formulaires/electricite.php';
        break;
    default:
        echo "Formulaire non trouvé pour ce métier.";
}
?>