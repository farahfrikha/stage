console.log("Le fichier JavaScript est chargé");
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

    document.querySelectorAll('.next-button').forEach(button => {
        button.addEventListener('click', function() {
            console.log("Bouton Suivant cliqué");
            if (currentStep < steps.length) {
                showStep(currentStep + 1);
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

    showStep(currentStep);
});
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
document.querySelectorAll('input[name="photosPlans"]').forEach(radio => {
radio.addEventListener('change', function() {
const uploadField = document.getElementById('uploadField');
if (this.value === 'oui') {
    uploadField.style.display = 'block';
} else {
    uploadField.style.display = 'none';
}
});
});
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
        document.getElementById('email-form').addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('check-email', '1');
        
            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.emailExists) {
                    // L'email existe déjà, afficher le message approprié
                    alert("Cette adresse email est déjà utilisée.");
                } else {
                    // L'email n'existe pas, afficher le formulaire d'inscription
                    showStep(8); // Aller à l'étape d'inscription
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
        });