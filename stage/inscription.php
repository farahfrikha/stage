<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/inscription.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <div class="containerins">
        <div class="logo-section">
            <h1>Travaux.com</h1>
        </div>
        <div class="signup-section">
            <?php
            include("config.php");

            if (isset($_POST['submit'])) {
                $nom = trim($_POST['nom']);
                $prenom = trim($_POST['prenom']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $age = intval(trim($_POST['age']));
                $metier = trim($_POST['metier']);
                $region = trim($_POST['region']);

                $errors = [];

                // Validation checks
                if (empty($nom)) {
                    $errors[] = "Le nom est requis.";
                }
                if (empty($prenom)) {
                    $errors[] = "Le prénom est requis.";
                }
                if (empty($region)) {
                    $errors[] = "La region est requise.";
                }
                if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Une adresse e-mail valide est requise.";
                }
                if (empty($password) || strlen($password) < 6) {
                    $errors[] = "Le mot de passe est requis et doit contenir au moins 6 caractères.";
                }
                if ($age <= 0) {
                    $errors[] = "L'âge doit être un nombre positif.";
                }
                if (empty($metier)) {
                    $errors[] = "Le métier est requis.";
                }

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<div class='message'><p>$error</p></div><br>";
                    }
                } else {
                    // Vérification de l'email
                    $stmt = $conn->prepare("SELECT email FROM utilisateur WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        echo "<div class='message'>
                                <p>Cette adresse e-mail existe déjà, veuillez en utiliser une autre.</p>
                              </div><br>";
                    } else {
                        $stmt->close();

                        // Préparation de l'insertion
                        $stmt = $conn->prepare("INSERT INTO utilisateur (email, nom, prenom, password, age, metier, region) VALUES (?, ?, ?, ?, ?, ?, ?)");
                        $stmt->bind_param("ssssiss", $email, $nom, $prenom, $password, $age, $metier, $region);
                        
                        if ($stmt->execute()) {
                            echo "Inscription validée";
                            header("Location: connexion.php");
                            exit();
                        } else {
                            echo "Erreur: " . $stmt->error;
                        }
                    }

                    $stmt->close();
                }
            } else {
                ?>

                <form action="" method="post">
                    <h2>Créer un compte</h2>
                    <p>C'est rapide et facile.</p>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" id="nom" placeholder="Nom de famille" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                    <input type="password" name="password" id="password" placeholder="Nouveau mot de passe" required>
                    <input type="number" name="age" id="age" placeholder="Âge" required>
                    <input type="text" name="region" id="region" placeholder="région" required>

                    <div class="profession">
                        <select name="metier" id="metier" required>
                            <option value="">Sélectionner un métier</option>
                            <option value="menuisier">Menuisier</option>
                            <option value="peinture">Peinture</option>
                            <option value="plomberie">Plomberie</option>
                            <option value="électricité">Électricité</option>
                        </select>
                    </div>
                    <button type="submit" name="submit">S'inscrire</button>
                </form>
                <p>Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a></p>

                <?php
            }
            ?>

            <?php
            // Fermeture de la connexion
            $conn->close();
            ?>
        </div>
    </div>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
