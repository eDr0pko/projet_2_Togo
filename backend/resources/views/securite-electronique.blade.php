<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sécurité Électronique | 2N MULTI SERVICES</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
<header>
  <div class="pb-20 hidden md:flex flex-row justify-between items-center z-10 relative px-[3%] bg-blue-500 bg-cover bg-center backdrop-blur-sm gap-10" style="background-position: center -300px;">
    <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-40 h-32" />
    <section id="navbar">
      <nav>
        <ul class="flex flex-row gap-[5%] justify-center text-white text-3xl font-semibold">
                     <li><a href="#home" class="hover:text-blue-700 transition-colors duration-500">Home</a></li>
                     <li><a href="#services" class="hover:text-blue-700 transition-colors duration-500">Services</a></li>
                     <li><a href="#recrutement" class="hover:text-blue-700 transition-colors duration-500">Recrutement</a></li>
                     <li><a href="#contact" class="hover:text-blue-700 transition-colors duration-500">Contact</a></li>
        </ul>
      </nav>
    </section>
    <div class="relative text-gray-600">
      <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
      <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
          <path d="M55.146,51.887L41.588,37.786c3.486-4.144..."/>
        </svg>
      </button>
    </div>
  </div>


  <!-- VERSION MOBILE -->
  <div class="md:hidden grid grid-cols-2 gap-4 px-4 py-4 bg-blue-500 bg-cover bg-center backdrop-blur-sm text-white">

    <!-- LOGO -->
    <div class="flex justify-center items-center">
      <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-[60%] h-auto" />
    </div>

    <!-- SEARCH BAR -->
    <div class="flex justify-end items-center">
      <div class="relative w-full">
        <input type="search" name="search" placeholder="Search" class="bg-white text-black h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none">
        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
          <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144..."/>
          </svg>
        </button>
      </div>
    </div>

    <!-- HOME -->
    <div class="flex justify-center items-center">
      <a href="#home" class="text-3xl font-semibold hover:text-blue-300">Home</a>
    </div>

    <!-- SERVICES -->
    <div class="flex justify-center items-center">
      <a href="#services" class="text-3xl font-semibold hover:text-blue-300">Services</a>
    </div>

    <!-- RECRUTEMENT -->
    <div class="flex justify-center items-center">
      <a href="#recrutement" class="text-3xl font-semibold hover:text-blue-300">Recrutement</a>
    </div>

    <!-- CONTACT -->
    <div class="flex justify-center items-center">
      <a href="#contact" class="text-3xl font-semibold hover:text-blue-300">Contact</a>
    </div>
  </div>

  <!-- HR (valable pour toutes tailles d'écran) -->
  <hr class="relative z-10 h-px bg-white border-0 dark:bg-white" />
</header>














  <div class="text-black pt-16 pb-10 px-6 text-center">
    <h1 class="text-4xl font-bold uppercase">Sécurité Électronique</h1>
    <p class="text-lg mt-4">La technologie au service de votre tranquillité</p>
  </div>

  <!-- Section principale -->
  <section class="max-w-5xl mx-auto py-12 px-6">
    <h2 class="text-2xl font-semibold text-blue-700 mb-6">Des solutions intelligentes pour une sécurité sans faille</h2>
    <p class="text-lg mb-6 leading-relaxed">
      Chez <strong>2N MULTI SERVICES</strong>, nous combinons expertise humaine et innovation technologique pour offrir une <strong>sécurité électronique</strong> de haut niveau,
      adaptée aux entreprises, institutions et particuliers.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Bloc 1 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">📹 Vidéosurveillance Intelligente</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Caméras HD jour/nuit avec vision en temps réel</li>
          <li>Détection de mouvement & reconnaissance faciale</li>
          <li>Accès à distance sécurisé (PC, tablette, mobile)</li>
          <li>Stockage des images et accès aux historiques</li>
        </ul>
      </div>

      <!-- Bloc 2 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">🔐 Contrôle d’Accès Sécurisé</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Accès par badge, code, empreinte ou reconnaissance faciale</li>
          <li>Gestion centralisée des entrées/sorties</li>
          <li>Historique des accès pour un suivi précis</li>
          <li>Intégration avec la vidéosurveillance</li>
        </ul>
      </div>

      <!-- Bloc 3 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">🔥 Détection & Prévention Incendie</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Capteurs intelligents de fumée, gaz et chaleur</li>
          <li>Alertes instantanées et dispositifs d’évacuation</li>
          <li>Alarmes sonores connectées</li>
          <li>Conformité aux normes de sécurité en vigueur</li>
        </ul>
      </div>

      <!-- Bloc 4 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">🚨 Systèmes d’Alarme Anti-Intrusion</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Capteurs de mouvement, bris de vitre, vibrations</li>
          <li>Alertes en temps réel sur mobile ou PC</li>
          <li>Réponse rapide via nos centres de surveillance</li>
        </ul>
      </div>
    </div>

    <!-- Pourquoi choisir 2N -->
    <div class="mt-12 bg-blue-100 p-6 rounded-lg border border-blue-300 shadow-inner">
      <h4 class="text-xl font-semibold text-blue-800 mb-4">Pourquoi Choisir 2N MULTI SERVICES ?</h4>
      <ul class="list-disc pl-6 text-gray-700 space-y-2 text-lg">
        <li>Solutions sur mesure selon vos besoins</li>
        <li>Technologie de pointe intégrée</li>
        <li>Surveillance continue 24h/24 et 7j/7</li>
        <li>Accompagnement complet : audit, installation, formation, maintenance</li>
      </ul>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white mt-20">
    <div class="max-w-7xl mx-auto py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Logo -->
      <div class="flex flex-col items-center text-center">
        <img src="../images/LOGO 2N MULTI SERVICES.png" alt="Logo 2N Multi Service" class="w-32 mb-4">
        <p class="text-gray-300 text-sm">
          2N MULTI SERVICE est votre partenaire de confiance en <span class="font-semibold text-white">nettoyage, sécurité</span> et <span class="font-semibold text-white">surveillance</span>.
          Nous garantissons des prestations de qualité, pour un environnement sain et sécurisé.
        </p>
      </div>

      <!-- Liens -->
      <div class="text-center">
        <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li><a href="#home" class="hover:text-white transition">Accueil</a></li>
          <li><a href="#about" class="hover:text-white transition">À propos</a></li>
          <li><a href="#services" class="hover:text-white transition">Nos services</a></li>
          <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="text-center">
        <h3 class="text-lg font-semibold mb-4">Contact</h3>
        <p class="text-gray-400 text-sm mb-2">📞 +228 90 00 00 00</p>
        <p class="text-gray-400 text-sm mb-2">✉️ contact@2n-multiservices.tg</p>
      </div>

      

    </div>
    <!-- Bas de page -->
      <div class="bg-gray-800 text-center text-m text-gray-400 py-4">
        &copy; 2025 2N MULTI SERVICE. Tous droits réservés. Développé par 
        <a href="https://neostart.tech/" target="_blank" rel="noopener noreferrer" class="text-blue-400 hover:underline">Neostart.tech</a>.
      </div>
  </footer>

</body>
</html>
