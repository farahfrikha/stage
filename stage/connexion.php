<?php
session_start();



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets\css\login.css">
</head>

<body>
    <div class="containerins">
        <div class="logo-section">
            <h1>Travaux.com</h1>
            <p>Le moyen fiable d'engager un artisan</p>
        </div>
        <div class="login-section">
            <?php

            include 'config.php';

            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $result = mysqli_query($conn, "SELECT * FROM utilisateur WHERE email='$email' AND password='$password'") or die("select error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['nom'] = $row['nom'];
                    $_SESSION['prenom'] = $row['prenom'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['metier'] = $row['metier'];
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<div class='message'>
                <p>Adresse e-mail ou mot de passe incorrect.</p>
              </div><br>";
                }
            } else {
                ?>

                <form action="" method="post">
                    <input type="text" name="email" id="email" placeholder="Adresse e-mail" required>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <button type="submit" name="submit">Se connecter</button>
                </form>
                <a href="inscription.php" class="create-account">Créer un nouveau compte</a>

                <?php
            }
            ?>
        </div>
</body>

</html>