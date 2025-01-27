document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.querySelector('#contactForm');
    const pseudoInput = document.querySelector('#pseudo');
    const telInput = document.querySelector('#tel');
    const emailInput = document.querySelector('#email');
    const messageInput = document.querySelector('#message');

    const pseudoError = document.querySelector('#pseudoError');
    const emailError = document.querySelector('#emailError');
    const telError = document.querySelector('#telError'); 
    const messageError = document.querySelector('#messageError');


    console.log ("coucou formcontact");

    contactForm.addEventListener('submit', function (e) {
        let isValid = true;

        // Réinitialiser les messages d'erreur
        if (pseudoError) pseudoError.classList.add('hidden');
        if (emailError) emailError.classList.add('hidden');
        messageError.classList.add('hidden');

        // Validation du pseudo (si présent)
        if (pseudoInput && pseudoInput.value.trim().length < 3) {
            pseudoError.textContent = 'Le nom doit contenir au moins 3 lettres.';
            pseudoError.classList.remove('hidden');
            isValid = false;
        }

        // Validation de l'email (si présent)
        if (emailInput.value.trim() !== '' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
            emailError.textContent = 'Veuillez entrer un email valide.';
            emailError.classList.remove('hidden');
            isValid = false;
        }

        // Validation du téléphone (si présent)
        if (telInput.value.trim() !== '' && !/^\d{10}$/.test(telInput.value.trim())) {
            telError.textContent = 'Veuillez entrer un numéro de téléphone valide.';
            telError.classList.remove('hidden');
            isValid = false;
        }

        // Validation du message
        if (messageInput.value.trim().length < 10) {
            messageError.textContent = 'Le message doit contenir au moins 10 caractères.';
            messageError.classList.remove('hidden');
            isValid = false;
        }

        // Empêcher l'envoi du formulaire si les validations échouent
        if (!isValid) {
            e.preventDefault();
        }
    });
});

const btnSendMail = document.querySelector('#btnSendMail');

btnSendMail.addEventListener('click', function () {
    console.log("click")
    btnSendMail.classList.add('btnDisabled');
    setTimeout(function () {
        btnSendMail.classList.remove('btnDisabled');
    }, 3000);

})

btnSendMail.addEventListener('click', function () {
    if (btnSendMail.classList.contains('btnDisabled')) {
        console.log("boutton désactivé");
    }
})