<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <title>Sécurité Electronique</title>

        <link href="src/output.css" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <script type="module" src="js/main.js" defer></script>
    </head>
<body class="bg-gray-50 text-gray-800 font-sans">
  <header>

    <!-- VERSION PC/TABLETTE GRANDE (inchangée) -->
    <div class="pb-20 hidden md:flex flex-row justify-between items-center z-10 relative px-[3%] bg-[url('../images/0F7A6951.jpg')] bg-cover bg-black/40 bg-center backdrop-blur-sm gap-10" style="background-position: center -300px;">
      <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-[7%] h-[7%] mt-5 ml-[10%]" />
      <section id="navbar">
        <nav>
          <ul class="flex flex-row gap-[5%] justify-center text-white text-3xl font-semibold">
            <li><a href="/" class="hover:text-blue-700 transition-colors duration-500">Accueil</a></li>
            <li><a href="/services" class="hover:text-blue-700 transition-colors duration-500">Services</a></li>
            <li><a href="/offres" class="hover:text-blue-700 transition-colors duration-500">Recrutement</a></li>
            <li><a href="/contact" class="hover:text-blue-700 transition-colors duration-500">Contact</a></li>
          </ul>
        </nav>
      </section>
      <!-- Barre de Recherche -->
      <div class="relative text-gray-600">
        <input id="searchInput" type="search" name="search" placeholder="Rechercher..." class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">

        <button type="button" id="searchBtn" class="absolute right-0 top-0 mt-3 mr-4 text-gray-600 hover:text-black transition duration-200">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786
              c0-12.682-10.318-23-23-23s-23,10.318-23,23
              s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162
              l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
              c0.779,0,1.518-0.297,2.079-0.837
              C56.255,54.982,56.293,53.08,55.146,51.887z
              M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
              s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>

        <ul id="suggestions"
          class="absolute top-full left-0 bg-white border border-gray-300 rounded-md mt-1 w-full max-h-60 overflow-auto hidden z-50 shadow-lg">
          <!-- Suggestions apparaîtront ici -->
        </ul>
      </div>
    </div>

    <!-- VERSION MOBILE --> 
    <div class="md:hidden grid grid-cols-2 gap-4 px-4 py-4 bg-[url('../images/0F7A6951.jpg')] bg-cover bg-center bg-black/20 backdrop-blur-sm text-white">

      <!-- LOGO -->
      <div class="flex justify-center items-center">
        <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-[60%] h-auto" />
      </div>

      <!-- Barre de Recherche -->
      <div class="relative text-gray-600">
        <input id="searchInput" type="search" name="search" placeholder="Rechercher..." class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">

        <button type="button" id="searchBtn" class="absolute right-0 top-0 mt-3 mr-4 text-gray-600 hover:text-black transition duration-200">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786
              c0-12.682-10.318-23-23-23s-23,10.318-23,23
              s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162
              l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
              c0.779,0,1.518-0.297,2.079-0.837
              C56.255,54.982,56.293,53.08,55.146,51.887z
              M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
              s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>

        <ul id="suggestions"
          class="absolute top-full left-0 bg-white border border-gray-300 rounded-md mt-1 w-full max-h-60 overflow-auto hidden z-50 shadow-lg">
          <!-- Suggestions apparaîtront ici -->
        </ul>
      </div>

      <!-- HOME -->
      <div class="flex justify-center items-center">
        <a href="/" class="text-3xl font-semibold hover:text-blue-300">Accueil</a>
      </div>

      <!-- SERVICES -->
      <div class="flex justify-center items-center">
        <a href="/services" class="text-3xl font-semibold hover:text-blue-300">Services</a>
      </div>

      <!-- RECRUTEMENT -->
      <div class="flex justify-center items-center">
        <a href="/offres" class="text-3xl font-semibold hover:text-blue-300">Recrutement</a>
      </div>

      <!-- CONTACT -->
      <div class="flex justify-center items-center">
        <a href="/contact" class="text-3xl font-semibold hover:text-blue-300">Contact</a>
      </div>
    </div>

  </header>


  <!-- Navbar services simple sous le header -->
<nav class="w-full bg-transparent border-b border-gray-200">
  <ul class="flex flex-wrap justify-center gap-8 py-3 text-lg font-semibold">
    <li>
      <a href="/securite-gardiennage"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('securite-gardiennage') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Sécurité & Gardiennage
      </a>
    </li>
    <li>
      <a href="/securite-cynophile"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('securite-cynophile') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Sécurité Cynophile
      </a>
    </li>
    <li>
      <a href="/securite-incendie"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('securite-incendie') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Sécurité Incendie
      </a>
    </li>
    <li>
      <a href="/securite-electronique"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('securite-electronique') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Sécurité Électronique
      </a>
    </li>
    <li>
      <a href="/surveillance-evenementielle"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('surveillance-evenementielle') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Surveillance Événementielle
      </a>
    </li>
    <li>
      <a href="/nettoyage-proprete"
         class="pb-1 border-b-2 transition-colors duration-200
         {{ request()->is('nettoyage-proprete') ? 'border-blue-700 text-blue-800' : 'border-transparent text-gray-700 hover:border-blue-400 hover:text-blue-700' }}">
        Nettoyage & Propreté
      </a>
    </li>
  </ul>
</nav>

<div class="text-black pt-16 pb-10 px-6 text-center">
    <h1 class="text-5xl font-bold uppercase">Sécurité Électronique</h1>
    <p class="text-xl mt-4">La technologie au service de votre tranquillité</p>
  </div>

  <!-- Section principale -->
  <section class="max-w-5xl mx-auto py-12 px-6">
    <h2 class="text-2xl md:text-4xl font-bold text-blue-700 mb-6 text-center tracking-wide">Des solutions intelligentes pour une sécurité sans faille</h2>
    <p class="text-lg mb-10 leading-relaxed text-justify max-w-4xl mx-auto">
      Chez <strong>2N MULTI SERVICE</strong>, nous combinons expertise humaine et innovation technologique pour offrir une <strong>sécurité électronique</strong> de haut niveau,
      adaptée aux entreprises, institutions et particuliers.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Bloc 1 -->
      <div class="border-l-8 border-blue-600 bg-white rounded-xl p-8 shadow group hover:border-red-600 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
        <div class="flex items-center mb-4">
          <span class="text-3xl mr-3 group-hover:scale-110 transition-transform">📹</span>
          <h3 class="text-xl font-bold group-hover:text-red-600 transition-colors">Vidéosurveillance Intelligente</h3>
        </div>
        <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
          <li>Caméras HD jour/nuit avec vision en temps réel</li>
          <li>Détection de mouvement & reconnaissance faciale</li>
          <li>Accès à distance sécurisé (PC, tablette, mobile)</li>
        </ul>
      </div>

      <!-- Bloc 2 -->
      <div class="border-l-8 border-blue-600 bg-white rounded-xl p-8 shadow group hover:border-red-600 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
        <div class="flex items-center mb-4">
          <span class="text-3xl mr-3 group-hover:scale-110 transition-transform">🔐</span>
          <h3 class="text-xl font-bold group-hover:text-red-600 transition-colors">Contrôle d’Accès Sécurisé</h3>
        </div>
        <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
          <li>Accès par badge, code, empreinte ou reconnaissance faciale</li>
          <li>Gestion centralisée des entrées/sorties</li>
          <li>Historique des accès pour un suivi précis</li>
          <li>Intégration avec la vidéosurveillance</li>
        </ul>
      </div>

      <!-- Bloc 3 -->
      <div class="border-l-8 border-blue-600 bg-white rounded-xl p-8 shadow group hover:border-red-600 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
        <div class="flex items-center mb-4">
          <span class="text-3xl mr-3 group-hover:scale-110 transition-transform">🔥</span>
          <h3 class="text-xl font-bold group-hover:text-red-600 transition-colors">Détection & Prévention Incendie</h3>
        </div>
        <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
          <li>Capteurs intelligents de fumée, gaz et chaleur</li>
          <li>Alertes instantanées et dispositifs d’évacuation</li>
          <li>Alarmes sonores connectées</li>
          <li>Conformité aux normes de sécurité en vigueur</li>
        </ul>
      </div>

      <!-- Bloc 4 -->
      <div class="border-l-8 border-blue-600 bg-white rounded-xl p-8 shadow group hover:border-red-600 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
        <div class="flex items-center mb-4">
          <span class="text-3xl mr-3 group-hover:scale-110 transition-transform">🚨</span>
          <h3 class="text-xl font-bold group-hover:text-red-600 transition-colors">Systèmes d’Alarme Anti-Intrusion</h3>
        </div>
        <ul class="list-disc pl-6 space-y-2 text-gray-700 text-base">
          <li>Capteurs de mouvement, bris de vitre, vibrations</li>
          <li>Alertes en temps réel sur mobile ou PC</li>
          <li>Réponse rapide via nos centres de surveillance</li>
        </ul>
      </div>
    </div>

    <!-- Pourquoi choisir 2N -->
    <div class="mt-16 max-w-5xl mx-auto px-4">
      <h4 class="text-3xl md:text-4xl font-bold text-blue-800 mb-8 text-center">Pourquoi Choisir 2N MULTI SERVICES&nbsp;?</h4>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 w-full">
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Solutions sur mesure selon vos besoins</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Technologie de pointe intégrée</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Surveillance continue 24h/24 et 7j/7</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Accompagnement complet : audit, installation, formation, maintenance</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-16">
      <a href="/contact"
         class="px-8 py-4 rounded-lg text-white text-lg font-semibold bg-blue-600 hover:bg-red-600 transition-colors duration-300 shadow-lg hover:scale-105">
        Contactez-nous
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white mt-20">
            <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center items-center">
                
                <!-- Logo et description -->
                <div>
                    <img src="../images/LOGO 2N MULTI SERVICES.png" alt="Logo 2N Multi Service" class="w-[25%] mb-4 mx-auto">
                    <p class="text-gray-300 text-sm">
                        2N MULTI SERVICE est votre partenaire de confiance en 
                        <span class="font-semibold text-white">nettoyage, sécurité</span> et 
                        <span class="font-semibold text-white">surveillance</span>. Nous garantissons des prestations de qualité, 
                        pour un environnement sain et sécurisé.
                    </p>
                </div>

                <!-- Liens rapides -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="/" class="hover:text-white transition">Accueil</a></li>
                        <li><a href="/services" class="hover:text-white transition">Nos services</a></li>
                        <li><a href="/offres" class="hover:text-white transition">Recrutement</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact & Réseaux -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400 text-sm mb-2"><i class="fas fa-phone mr-2"></i>+228 70 99 77 77</p>
                    <p class="text-gray-400 text-sm mb-2"><i class="fas fa-envelope mr-2"></i>contact@2nmultiservice.com</p>
                    <p class="text-gray-400 text-sm mb-4"><i class="fas fa-map-marker-alt mr-2"></i>Kegué kpatcha, Rue des 14 villas - Lomé, Togo</p>

                    <div class="flex justify-center items-center gap-6 text-2xl mt-6">
                        <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-blue-600"><i class="fab fa-linkedin"></i></a>
                    </div>
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
