<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="http://localhost/stage/assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="logo-section">
            <h1>Travaux.com</h1>
            <p>espace administrateur</p>
        </div>
        <div class="login-section">
            <?php  include 'script_admin.php'?>
            <?php if (isset($error)){ echo $error;}?>
                <form action="" method="post">
                    <input type="text" name="adresse" id="adresse" placeholder="Adresse" required>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
                    <button type="submit" name="submit">Se connecter</button>
                </form>
        </div>
</body>

</html>