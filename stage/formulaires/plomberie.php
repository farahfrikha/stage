<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Projet</title>
    <link rel="stylesheet" href="assets/css/forum.css">
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
            <h2>quelle est la nature de travaux ? </h2>
            <form>
                <div class="options">
                    <input type="radio" id="systeme" name="nature" value="systeme">
                    <label for="systeme"> nouveaux systeme de plomberie </label>
                    <input type="radio" id="reparation" name="nature" value="reparation">
                    <label for="reparation">reparation</label>
                    <input type="radio" id="resaux" name="nature" value="resaux">
                    <label for="resaux">resaux de canalisation</label>
                    <input type="radio" id="autre" name="batiment" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
                </div>
            
                <button type="button" class="previous-button">Précédent</button>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>

        <div class="step" id="step3" style="display: none;">
            <h1>Étape 3 sur 9</h1>
            <h2>pour quel type de batiment ? </h2>
            <form>
                <div class="options">
                    <input type="radio" id="appartement" name="batiment" value="appartement">
                    <label for="appartement">appartement </label>
                    <input type="radio" id="maison" name="batiment" value="maison">
                    <label for="maison">maison individuelle</label>
                    <input type="radio" id="usine" name="batiment" value="usine">
                    <label for="usine">usine</label>
                    <input type="radio" id="commerce" name="batiment" value="commerce">
                    <label for="commerce">commerce</label>          
                    
                    <input type="radio" id="autre" name="batiment" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
                </div>
            
                <button type="button" class="previous-button">Précédent</button>
                <button type="button" class="next-button">Suivant</button>
            </form>
        </div>
    </div>
    <div class="step" id="step2" style="display: none;">
            <h1>Étape 4 sur 9</h1>
            <h2>Que souhaitez-vous peindre ? </h2>
            <form>
                <div class="options">
                    <input type="radio" id="interieur" name="piece" value="interieur">
                    <label for="interieur">Murs</label>
                    <input type="radio" id="exterieur" name="piece" value="exterieur">
                    <label for="exterieur">Plafonds</label>
                    <input type="radio" id="autre" name="piece" value="autre">
                    <label for="autre">Autre</label>
                    <input type="text" id="description-autre" name="description-autre" style="display: none;" placeholder="Décrivez ce que vous souhaitez peindre">
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
            
        <button type="button" class="previous-button">Précédent</button>
        <button type="button" class="next-button">Suivant</button>
    </form>
</div>
    <script>
        console.log("Le fichier JavaScript est chargé");

        document.addEventListener('DOMContentLoaded', function () {
            const steps = document.querySelectorAll('.step');
            let currentStep = 1;

            function showStep(step) {
                steps.forEach((stepElement, index) => {
                    stepElement.style.display = (index === step - 1) ? 'block' : 'none';
                });
                currentStep = step;
            }

            function validateStep(step) {
                const currentStepElement = steps[step - 1];
                const inputs = currentStepElement.querySelectorAll('input, select');
                for (const input of inputs) {
                    if (input.hasAttribute('required') && !input.value) {
                        return false;
                    }
                    if (input.type === 'radio' || input.type === 'checkbox') {
                        const groupName = input.name;
                        const groupChecked = currentStepElement.querySelector(`input[name="${groupName}"]:checked`);
                        if (groupChecked === null) {
                            return false;
                        }
                    }
                }
                return true;
            }

            document.querySelectorAll('.next-button').forEach(button => {
                button.addEventListener('click', function() {
                    console.log("Bouton Suivant cliqué");
                    if (validateStep(currentStep) && currentStep < steps.length) {
                        showStep(currentStep + 1);
                    } else {
                        alert("Veuillez remplir tous les champs requis avant de continuer.");
                    }
                });
            });

            document.querySelectorAll('.previous-button').forEach(button => {
                button.addEventListener('click', function() {
                    console.log("Bouton Précédent cliqué");
                    if (currentStep > 1) {
                        showStep(currentStep - 1);
                    }
                });
            });

            document.querySelectorAll('input[name="paint"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const autreInput = document.getElementById('description-autre');
                    if (this.value === 'autre') {
                        autreInput.style.display = 'block';
                        autreInput.setAttribute('required', 'required');
                    } else {
                        autreInput.style.display = 'none';
                        autreInput.removeAttribute('required');
                    }
                });
            });

            showStep(currentStep);
        });
    </script>
</body>
</html>
