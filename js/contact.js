document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche la soumission normale du formulaire

    // Récupérer les valeurs des champs
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Créer un objet FormData pour envoyer les données
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('message', message);

    // Envoyer les données avec fetch
    fetch('php/contact.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            // Afficher un message de succès ou d'erreur
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.textContent = data;
            responseMessage.classList.remove('text-red-500');
            responseMessage.classList.add('text-green-500');
            // Réinitialiser les champs du formulaire après envoi
            document.getElementById('contactForm').reset();
        })
        .catch(error => {
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.textContent = 'Une erreur est survenue. Veuillez réessayer.';
            responseMessage.classList.remove('text-green-500');
            responseMessage.classList.add('text-red-500');
            console.error('Erreur:', error);
        });
});
