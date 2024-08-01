<?php
session_start();
// Connexion à la base de données
include("../config.php");


$emailExists = false;
$artisans = [];

if (isset($_POST['check-email'])) {
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "SELECT * FROM clients WHERE adressemail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // L'email existe déjà
        echo json_encode(["emailExists" => true]);
    } else {
        // L'email n'existe pas
        echo json_encode(["emailExists" => false]);
    }
    exit; 
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['step'])) {

        $_SESSION['form_data'][$_POST['step']] = $_POST['response'];
    }

    if (isset($_POST['complete_form'])) {
        $email = $conn->real_escape_string($_SESSION['form_data']['e1']['email']);
        $e1 = $conn->real_escape_string($_SESSION['form_data']['e1']['adresse']);
        $e2 = $conn->real_escape_string($_SESSION['form_data']['e2']['tache']);
        $e3 = $conn->real_escape_string($_SESSION['form_data']['e3']['some_field']);
        $e4 = $conn->real_escape_string($_SESSION['form_data']['e4']['some_field']);
        $e5 = $conn->real_escape_string($_SESSION['form_data']['e5']['some_field']);
        $e6 = $conn->real_escape_string($_SESSION['form_data']['e6']['some_field']);
        $e7 = $conn->real_escape_string($_SESSION['form_data']['e7']['some_field']);

$sql = "INSERT INTO reponses (e1, e2, e3, e4, e5, e6, e7, adressemail) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $e1, $e2, $e3, $e4, $e5, $e6, $e7, $email);

        if ($stmt->execute()) {
            echo "Réponses enregistrées avec succès!";
            unset($_SESSION['form_data']); // Vider les données de session après l'enregistrement
        } else {
            echo "Erreur lors de l'enregistrement des réponses : " . $stmt->error;
        }
    }
}
if (isset($_POST['signup'])) {
    $nom = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $telephone = $conn->real_escape_string($_POST['phone']);
    $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérifier si l'email existe déjà
    $checkEmail = "SELECT * FROM clients WHERE adressemail = ?";
    $stmtCheck = $conn->prepare($checkEmail);
    $stmtCheck->bind_param("s", $email);
    $stmtCheck->execute();
    $resultCheck = $stmtCheck->get_result();

    if ($resultCheck->num_rows > 0) {
        echo "Cette adresse email est déjà utilisée.";
        exit;
    }

    // Si l'email n'existe pas, procéder à l'insertion
    $sql = "INSERT INTO clients (nom, adressemail, telephone, mdp) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nom, $email, $telephone, $mdp);
    
    if ($stmt->execute()) {
        echo "Inscription réussie!";
        // Optionnel : Récupérer l'ID du nouvel utilisateur
        $newUserId = $conn->insert_id;
        echo "Votre ID utilisateur est : " . $newUserId;
    } else {
        echo "Erreur lors de l'inscription : " . $stmt->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Projet</title>
    <link rel="stylesheet" href="http://localhost/stage/assets/css/forum.css">
    <link rel="stylesheet" href="https://fontawesome.com/">

</head>
<body>
    <div class="container">
   

        <div class="step" id="step1">
            <h1>Étape 1 sur 9</h1>
            <h2>Décrivez votre projet et échangez avec les artisans près de chez vous.</h2>
            <form>
                <label for="adresse">Région du lieu des travaux *</label>
                <select id="adresse" name="adresse" required>
                    <option value="">Sélectionnez une option</option>
                    <option value="ariana">Gouvernorat de l'Ariana</option>
                    <option value="ariana">Gouvernorat de l'Ariana</option>
                    <option value="beja">Gouvernorat de Béja</option>
                    <option value="benarous">Gouvernorat de Ben Arous</option>
                    <option value="bizerte">Gouvernorat de Bizerte</option>
                    <option value="gabes">Gouvernorat de Gabès</option>
                    <option value="gafsa">Gouvernorat de Gafsa</option>
                    <option value="jendouba">Gouvernorat de Jendouba</option>
                    <option value="kairouan">Gouvernorat de Kairouan</option>
                    <option value="kasserine">Gouvernorat de Kasserine</option>
                    <option value="kebili">Gouvernorat de Kébili</option>
                    <option value="kef">Gouvernorat du Kef</option>
                    <option value="mahdia">Gouvernorat de Mahdia</option>
                    <option value="gafsa">Gouvernorat de Manouba</option>
                    <option value="medenine">Gouvernorat de Médenine</option>
                    <option value="monastir">Gouvernorat de Monastir</option>
                    <option value="nabeul">Gouvernorat de Nabeul</option>
                    <option value="sfax">Gouvernorat de Sfax</option>
                    <option value="sidibouzid">Gouvernorat du Sidi Bouzid</option>
                    <option value="Siliana">Gouvernorat de Siliana</option>
                    <option value="Sousse">Gouvernorat de Sousse</option>
                    <option value="Tataouine">Gouvernorat de Tataouine</option>
                    <option value="Tozeur">Gouvernorat de Tozeur</option>
                    <option value="Tunis">Gouvernorat de Tunis</option>
                    <option value="Zaghouan">Gouvernorat de Zaghouan</option>
                                   </select>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>
        
        <div class="step" id="step2" style="display: none;">
            <h1>Étape 2 sur 9</h1>
            <h2>Quelles pièces souhaitez-vous effectuer ? </h2>
            <form>
                <div class="options">
                    <input type="checkbox" id="arbre" name="tache" value="arbre">
                    <label for="arbre">tailler les arbres</label>
                    <input type="checkbox" id="pelouse" name="tache" value="pelouse">
                    <label for="pelouse">tondre la pelouse</label> 
                    <input type="checkbox" id="plante" name="tache" value="plante">
                    <label for="plante">traiter les plantes</label> 
                    <input type="checkbox" id="herbes" name="tache" value="herbes">
                    <label for="herbes">retirer les mauvaises herbes </label> 
                    <input type="checkbox" id="feuilles" name="tache" value="feuille">
                    <label for="feuille">ramasser les feuilles</label> 
                    <input type="checkbox" id="paver" name="tache" value="paver">
                    <label for="paver">paver</label> 
                    <input type="checkbox" id="autre" name="piece" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
               
                
                </div>
                <button type="button" class="previous-button">Précédent</button>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>
        <div class="step" id="step3" style="display: none;">
    <h1>Étape 3 sur 9</h1>
    <form>
    <label for="additionalInfo">quelle est la surface du jardin en metre carré</label>
            <textarea id="additionalInfo" name="additionalInfo" placeholder="ex:120 m2"></textarea>
          <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
    <div class="step" id="step4" style="display: none;">
    <h1>Étape 4 sur 9</h1>
    <h2>un entretient regulier est il necessaire ?</h2>
    <form>
        <div class="options">
            <input type="radio" id="e1" name="entretient" value="e1">
            <label for="e1">a définir</label>
            <input type="radio" id="e2" name="entetient" value="e2">
            <label for="e2"> non</label>
            <input type="radio" id="e3" name="entretient" value="e3">
            <label for="e3">oui</label>
        </div>
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
<div class="step" id="step5" style="display: none;">
    <h1>Étape 5 sur 9</h1>
    <h2>Quand souhaitez-vous que le travail soit terminé?</h2>
    <form>
        <div class="options">
            <input type="radio" id="t1" name="delai" value="urgent">
            <label for="t1">urgent</label>
            <input type="radio" id="t2" name="delai" value="pas_de_date_fixee">
            <label for="t2">pas de date fixée</label>
            <input type="radio" id="t3" name="delai" value="moins_deux_semaines">
            <label for="t3">dans moins de deux semaines</label>
            <input type="radio" id="t4" name="delai" value="moins_six_mois">
            <label for="t4">dans moins de 6 mois</label>
        </div>
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
<div class="step" id="step6" style="display: none;">
    <h1>Étape 6 sur 9</h1>
    <form>
    <label for="photosPlans">Photos ou plans (facultatif)</label>
            <p>En ajoutant des photos, les artisans pourront mieux évaluer le travail à réaliser pour votre projet de chantier et vous faire un devis plus précis.</p>
            <input type="radio" id="oui" name="photosPlans" value="oui">
            <label for="oui">Oui</label>
            <input type="radio" id="non" name="photosPlans" value="non">
            <label for="non">Non, peut-être plus tard</label>
            
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>

<div class="step" id="step8" style="display: none;">
    <h1>Étape 8 sur 9</h1>
    <h2>Recevez des réponses de jardiniers-paysagistes près de chez vous.</h2>
    <p>Vos coordonnées seront visibles uniquement par les artisans que vous aurez choisis.</p>
    <form>
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required>

        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
<div class="step" id="step9" style="display: none;">
            <h1>Étape 9 sur 9</h1>
            <p>Pour suivre votre projet, veuillez créer un compte.</p>
            <form id="signup-form" method="POST" action="">
            <label for="email">email</label>
                <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" readonly>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
                <label for="phone">Téléphone</label>
                <input type="text" id="phone" name="phone" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <input type="checkbox" id="communications" name="communications">
                <label for="communications">J'accepte de recevoir des communications commerciales relatives aux services de Travaux.com par email, SMS et/ou téléphone et je comprends que je peux me désinscrire à tout moment.</label>
                <button type="button" class="previous-button">Précédent</button>
                <button type="submit" name="signup">S'inscrire</button>
            </form>
        </div>

<script src="http://localhost/stage/assets/js/forum.js">
    document.addEventListener('DOMContentLoaded', function() {
        var stepElements = document.querySelectorAll('.step');
        var currentStep = 0;

        function showStep(index) {
            stepElements[currentStep].style.display = 'none';
            stepElements[index].style.display = 'block';
            currentStep = index;
        }

        document.querySelectorAll('.next-button').forEach(function(button) {
            button.addEventListener('click', function() {
                showStep(currentStep + 1);
            });
        });

        document.querySelectorAll('.previous-button').forEach(function(button) {
            button.addEventListener('click', function() {
                showStep(currentStep - 1);
            });
        });

        // Gestion de la soumission du formulaire d'email
        document.getElementById('email-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('check-email', '1');

    console.log("Envoi de la requête pour vérifier l'email");

    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        console.log("Réponse reçue du serveur");
        return response.json();
    })
    .then(data => {
        console.log("Données reçues du serveur:", data);
        if (data.emailExists) {
            console.log("Le serveur indique que l'email existe déjà");
            alert("Cette adresse email est déjà utilisée.");
        } else {
            console.log("Le serveur indique que l'email n'existe pas");
            showStep(8); // Aller à l'étape d'inscription
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
    });
});

        // Gestion de la soumission du formulaire d'inscription
        document.getElementById('signup-form').addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('signup', '1');

            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data); // Afficher le message de réussite ou d'erreur
                if (data.includes("Inscription réussie")) {
                    document.getElementById("signup-form").style.display = "none";
                    document.getElementById("artisans-section").style.display = "block";
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
        });

        <?php if (isset($_POST['check-email'])): ?>
            <?php if ($emailExists): ?>
                document.getElementById("signup-form").style.display = "none";
                document.getElementById("artisans-section").style.display = "block";
            <?php else: ?>
                document.getElementById("artisans-section").style.display = "none";
                document.getElementById("signup-form").style.display = "block";
                showStep(8);
            <?php endif; ?>
        <?php endif; ?>
    });
    </script>
</script>

</body>
</html>
