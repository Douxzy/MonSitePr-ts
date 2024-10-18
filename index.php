<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="MonSitePrêts - Solutions Web">
    <meta name="description" content="Des solutions sur mesure pour propulser votre business avec un site web performant et attractif.">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <title>MonSitePrêts - Solutions Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100 font-sans">
    <?php include 'header/header.php'; ?>

    <!-- Section de la bannière -->
    <section class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white p-8 rounded-lg shadow-lg mb-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 space-y-4 animate-fade-in">
                <h1 class="text-4xl font-bold">Transformez votre Présence en Ligne</h1>
                <p class="text-lg">Des solutions sur mesure pour propulser votre business avec un site web performant et attractif.</p>
                <a href="#contact" class="bg-white text-purple-600 py-2 px-6 rounded-full shadow-md hover:bg-gray-200 transition duration-300">
                    Demander un devis gratuit
                </a>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
                <img src="../assets/banner.jpg" alt="Création de sites web" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Présentation des services -->
    <section class="container mx-auto mb-12 px-4 space-y-8">
        <h2 class="text-3xl font-semibold text-center text-gray-800">Nos Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300 text-center">
                <img src="../assets/image1.jpg" alt="Création de Sites" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Création de Sites Web</h3>
                <p class="text-gray-600">Des sites sur mesure pour booster votre activité.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300 text-center">
                <img src="../assets/image2.jpg" alt="Refonte de Sites" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Refonte de Sites Web</h3>
                <p class="text-gray-600">Modernisez votre présence en ligne avec un design actualisé.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300 text-center">
                <img src="../assets/image3.jpg" alt="E-Commerce" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Sites Web E-Commerce</h3>
                <p class="text-gray-600">Lancez votre boutique en ligne avec des fonctionnalités optimisées.</p>
            </div>
        </div>
    </section>

    <!-- Nos Engagements -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Pourquoi Choisir MonSitePrêt ?</h2>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <div class="bg-white shadow-lg rounded-lg p-6 flex-1 animate-fade-in">
                    <h3 class="text-xl font-semibold text-gray-800">Qualité et Expertise</h3>
                    <p class="text-gray-600 mt-4">Nous mettons notre savoir-faire à votre service pour créer des sites web à la fois performants et esthétiques, répondant aux dernières normes technologiques.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 flex-1 animate-fade-in">
                    <h3 class="text-xl font-semibold text-gray-800">Accompagnement Personnalisé</h3>
                    <p class="text-gray-600 mt-4">Nous vous accompagnons à chaque étape de votre projet, du concept initial à la mise en ligne, pour garantir une satisfaction totale.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 flex-1 animate-fade-in">
                    <h3 class="text-xl font-semibold text-gray-800">Support Réactif</h3>
                    <p class="text-gray-600 mt-4">Notre équipe est disponible pour répondre à vos questions et vous aider à tirer le meilleur parti de votre site web, même après sa mise en ligne.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white shadow-md rounded-lg p-6 mb-12 container mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Contactez-nous pour un devis gratuit</h2>
        <form id="contactForm" class="space-y-4 max-w-lg mx-auto">
            <input type="text" id="name" name="name" placeholder="Nom" required class="w-full p-2 border border-gray-300 rounded-lg focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-300">
            <input type="email" id="email" name="email" placeholder="E-mail" required class="w-full p-2 border border-gray-300 rounded-lg focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-300">
            <textarea id="message" name="message" placeholder="Votre message" required class="w-full p-2 border border-gray-300 rounded-lg focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-300"></textarea>
            <button type="submit" class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-2 px-4 rounded-full shadow-md hover:from-purple-600 hover:to-indigo-700 transform hover:scale-105 transition duration-300">
                Envoyer
            </button>
            <p id="responseMessage" class="text-center mt-4"></p>
        </form>
    </section>

    <script src="js/contact.js"></script>



    <?php include 'footer/footer.php'; ?>
</body>

</html>