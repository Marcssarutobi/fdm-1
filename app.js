// Sélection des éléments du formulaire
const form = document.querySelector('form');
const userFirstname = document.getElementById('name');
const userEmail = document.getElementById('email');
const userMessage = document.getElementById('message');
const subjectInput = document.getElementById('subject');

// Initialisation d'EmailJS avec ta clé publique
emailjs.init("fPd26rAsIdvSgTDw3"); // Remplace "YOUR_PUBLIC_KEY" par ta vraie clé EmailJS

// Regex pour validation de l'email
const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i;

// Écouteur d'événement pour la soumission du formulaire
form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Vérification des champs
    if (
        userFirstname.value.trim() &&
        userEmail.value.trim() &&
        userMessage.value.trim() &&
        subjectInput.value.trim() &&
        emailRegex.test(userEmail.value)
    ) {
        sendEmail();
    } else {
        console.log('Veuillez remplir tous les champs correctement !');
    }
});

// Fonction pour envoyer l'email via EmailJS
function sendEmail() {
    const templateParams = {
        name: userFirstname.value,
        email: userEmail.value,
        message: userMessage.value,
        subject: subjectInput.value,
    };

    const serviceID = 'service_5c5a2q1';
    const templateID = 'template_47z7my4';

    emailjs
        .send(serviceID, templateID, templateParams)
        .then((res) => {
            console.log('Email envoyé avec succès !', res.status, res.text);
            alert('Votre message a été envoyé avec succès !');
            form.reset();
        })
        .catch((err) => {
            console.error('Erreur lors de l’envoi de l’e-mail :', err);
            alert('Échec de l’envoi. Vérifiez vos informations et réessayez.');
        });
}
