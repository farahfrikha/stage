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
                    <option value="1bizerte">Gouvernorat de Bizerte</option>
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
            <h2>Que souhaitez-vous peindre ? </h2>
            <form>
                <div class="options">
                    <input type="radio" id="murs" name="paint" value="murs">
                    <label for="murs">Murs</label>
                    <input type="radio" id="plafonds" name="paint" value="plafonds">
                    <label for="plafonds">Plafonds</label>
                    <input type="radio" id="autre" name="paint" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
                </div>
                <div class="options">
                    <label for="surfaces"><h2>Quels travaux de peinture sont nécessaires ? *</h2></label>
                    <select id="surfaces" name="surfaces" required>
                        <option value="">Sélectionnez une option</option>
                        <option value="1-5">1-5 surfaces</option>
                        <option value="6-10">6-10 surfaces</option>
                        <option value="11-15">11-15 surfaces</option>
                        <option value="16-20">16-20 surfaces</option>
                        <option value="21-25">21-25 surfaces</option>
                        <option value="plus25">Plus de 25 surfaces</option>
                    </select>
                </div>
                <button type="button" class="previous-button">Précédent</button>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>

        <div class="step" id="step3" style="display: none;">
            <h1>Étape 3 sur 9</h1>
            <h2>Quelles pièces souhaitez-vous peindre ? (facultatif)</h2>
            <form>
                <div class="options">
                    <input type="checkbox" id="maison" name="piece" value="maison">
                    <label for="maison">Toute la maison</label>
                    <input type="checkbox" id="salon" name="piece" value="salon">
                    <label for="salon">salon</label> 
                    <input type="checkbox" id="chambre" name="piece" value="chambre">
                    <label for="chambre">chambre(s)</label> 
                    <input type="checkbox" id="couloir" name="piece" value="couloir">
                    <label for="couloir">couloir</label> 
                    <input type="checkbox" id="cuisine" name="piece" value="cuisine">
                    <label for="cuisine">cuisine</label> 
                    <input type="checkbox" id="sdb" name="piece" value="sdb">
                    <label for="sdb">salle de bain</label> 
                    <input type="checkbox" id="autre" name="piece" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
               
                
                </div>
                <button type="button" class="previous-button">Précédent</button>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>
    
    <div class="step" id="step4" style="display: none;">
      <h1>Étape 4 sur 9</h1>
      <h2>Quel est l'état des surfaces ?</h2>
     <form>
        <div class="options">
            <input type="radio" id="e1" name="etat_surface" value="bon_etat">
            <label for="e1">bon état</label>
            <input type="radio" id="e2" name="etat_surface" value="etat_moyen">
            <label for="e2">état moyen</label>
            <input type="radio" id="e3" name="etat_surface" value="mauvais_etat">
            <label for="e3">mauvais état</label>
            <input type="radio" id="e4" name="etat_surface" value="tres_mauvais_etat">
            <label for="e4">très mauvais état</label>
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

        <div id="uploadField" style="display: none;">
            <label for="photos">Téléchargez vos photos :</label>
            <input type="file" id="photos" name="photos[]" multiple>
        </div>
        
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>

<div class="step" id="step7" style="display: none;">
    <h1>Étape 7 sur 9</h1>
    <form>
    <label for="additionalInfo">Informations supplémentaires (facultatif)</label>
            <textarea id="additionalInfo" name="additionalInfo" placeholder="Merci de ne pas partager vos coordonnées ici"></textarea>
          <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
<div class="step" id="step8" style="display: none;">
    <h1>Étape 8 sur 9</h1>
    <h2>Recevez des réponses de peintres près de chez vous.</h2>
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
    <form>
    <p>Pour suivre votre projet, veuillez créer un compte.</p>
            <input type="email" id="email" name="email" value="adresse email" >
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone" required>
            <input type="checkbox" id="communications" name="communications">
            <label for="communications">J'accepte de recevoir des communications commerciales relatives aux services de Travaux.com par email, SMS et/ou téléphone et je comprends que je peux me désinscrire à tout moment.</label>
            <label for="mdp">mot de passe</label>
            <input type="text" id="mdp" name="mdp" required>
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
<script src="http://localhost/stage/assets/js/forum.js"></script>

</body>
</html>
