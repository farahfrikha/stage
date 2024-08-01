<?php
session_start();

if(isset($_POST['submit'])){
    if(isset($_POST['adresse']) && !empty($_POST['adresse'])){
        if(filter_var($_POST['adresse'], FILTER_VALIDATE_EMAIL)){
            if(isset($_POST['mdp']) && !empty($_POST['mdp'])){

                require "server.php";

                $mdp = sha1($_POST['mdp']); 

                // Préparation de la requête
                $stmt = $conn->prepare("SELECT adresse FROM admin WHERE adresse = ? AND mdp = ?");
                $stmt->bind_param("ss", $_POST['adresse'], $mdp);
                $stmt->execute();
                $stmt->store_result();

                $rows = $stmt->num_rows;

                if($rows > 0) {
                    $_SESSION['admin'] = $_POST['adresse'];
                    header("Location: dashboard.php");
                    exit(); 
                } else {
                    $error = "Adresse ou mot de passe incorrect";
                }

                $stmt->close();
                $conn->close();

            } else {
                $error = "Veuillez saisir votre mot de passe";
            }

        } else {
            $error = "Entrez une adresse email valide";
        }

    } else {
        $error = "Entrez une adresse email";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <form method="post" action="">
        <input type="email" name="adresse" placeholder="Adresse Email" required>
        <input type="password" name="mdp" placeholder="Mot de Passe" required>
        <button type="submit" name="submit">Se connecter</button>
    </form>
    <?php
    if(isset($error)){
        echo '<p style="color:red;">'.$error.'</p>';
    }
    ?>
</body>
</html>
