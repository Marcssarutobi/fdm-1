document.addEventListener("DOMContentLoaded", () => {
    const langSwitchLinks = document.querySelectorAll('.lang-switch');
    const currentLang = localStorage.getItem('site-lang') || 'fr'; // Langue par défaut

    // Charger le contenu initial
    setLanguage(currentLang);

    // Gérer les clics sur les boutons
    langSwitchLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const selectedLang = link.getAttribute('data-lang');
            localStorage.setItem('site-lang', selectedLang); // Enregistre la langue choisie
            setLanguage(selectedLang); // Change la langue
        });
    });

    // Fonction pour définir la langue
    function setLanguage(lang) {
        fetch(`translations/${lang}.json`) // Chemin vers les fichiers de traduction
            .then(response => response.json())
            .then(translations => {
                // Remplacer le texte sur le site
                document.querySelectorAll("[data-i18n]").forEach(element => {
                    const key = element.getAttribute("data-i18n");
                    if (translations[key]) {
                        element.textContent = translations[key];
                    }
                });
            })
            .catch(error => console.error('Erreur lors du chargement des traductions:', error));
    }
});
