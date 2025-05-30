<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Nettoyage & Propreté | 2N MULTI SERVICES</title>
  <link href="src/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script type="module" src="js/main.js" defer></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- Header principal -->
  <header>
    <!-- VERSION PC/TABLETTE -->
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
      <div class="relative text-gray-600">
        <input id="searchInput" type="search" name="search" placeholder="Rechercher..." class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">
        <button type="button" id="searchBtn" class="absolute right-0 top-0 mt-3 mr-4 text-gray-600 hover:text-black transition duration-200">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786
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
      <div class="flex justify-center items-center">
        <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-[60%] h-auto" />
      </div>
      <div class="relative text-gray-600">
        <input id="searchInput" type="search" name="search" placeholder="Rechercher..." class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">
        <button type="button" id="searchBtn" class="absolute right-0 top-0 mt-3 mr-4 text-gray-600 hover:text-black transition duration-200">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786
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
      <div class="flex justify-center items-center">
        <a href="/" class="text-3xl font-semibold hover:text-blue-300">Accueil</a>
      </div>
      <div class="flex justify-center items-center">
        <a href="/services" class="text-3xl font-semibold hover:text-blue-300">Services</a>
      </div>
      <div class="flex justify-center items-center">
        <a href="/offres" class="text-3xl font-semibold hover:text-blue-300">Recrutement</a>
      </div>
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
    <h1 class="text-5xl font-bold uppercase">Nettoyage & Propreté</h1>
    <p class="text-xl mt-4">Des environnements sains pour des équipes productives</p>
  </div>

  <!-- Section principale -->
  <section class="max-w-5xl mx-auto py-12 px-6">

    <!-- Bloc vertical : Présentation + Exemples -->
    <div class="max-w-3xl mx-auto mb-12">
      <div class="bg-white rounded-xl shadow p-8 mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-blue-700 mb-4 text-center">Des solutions de nettoyage sur mesure</h2>
        <p class="text-lg mb-4 leading-relaxed text-justify">
          Chez <strong>2N MULTI SERVICES</strong>, nous croyons qu'un environnement de travail propre et sain est essentiel pour la productivité et le bien-être de vos équipes.
          Nous vous offrons des solutions de nettoyage professionnelles, spécialement adaptées aux besoins des entreprises et des sites industriels.
        </p>
        <p class="text-lg leading-relaxed text-justify">
          Nos équipes interviennent avec <strong>discrétion, efficacité et flexibilité</strong> pour garantir la propreté de vos locaux, bureaux, ateliers, chantiers ou espaces collectifs.
        </p>
      </div>
      <div class="bg-blue-100 border-l-4 border-blue-600 p-6 rounded-lg shadow-inner">
        <h3 class="text-xl font-bold text-blue-800 mb-4">Exemples de prestations :</h3>
        <ul class="list-disc list-inside space-y-1 text-lg text-blue-900">
          <li>🧹 Nettoyage professionnel & industriel</li>
          <li>🧴 Désinfection & traitement anti-bactérien</li>
          <li>🏗️ Nettoyage de fin de chantier</li>
          <li>🪟 Nettoyage de vitres et surfaces vitrées</li>
          <li>🌱 Entretien des espaces verts</li>
        </ul>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Bloc 1 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-8 border-blue-600 group hover:border-red-600 transition-all duration-300">
        <h3 class="text-xl font-bold mb-3 group-hover:text-red-600 transition-colors">🧹 Nettoyage Professionnel & Industriel</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Collecte, tri et évacuation des déchets</li>
          <li>Dépoussiérage et entretien des surfaces</li>
          <li>Nettoyage en profondeur des sols</li>
          <li>Élimination des toiles d'araignées</li>
          <li>Nettoyage des vitres et fenêtres</li>
        </ul>
      </div>
      <!-- Bloc 2 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-8 border-blue-600 group hover:border-red-600 transition-all duration-300">
        <h3 class="text-xl font-bold mb-3 group-hover:text-red-600 transition-colors">🧴 Désinfection & Traitement Anti-Bactérien</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Désinfection préventive et curative</li>
          <li>Désinsectisation et dératisation</li>
          <li>Traitement phytosanitaire des espaces extérieurs</li>
        </ul>
      </div>
      <!-- Bloc 3 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-8 border-blue-600 group hover:border-red-600 transition-all duration-300">
        <h3 class="text-xl font-bold mb-3 group-hover:text-red-600 transition-colors">🏗️ Nettoyage de Fin de Chantier</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Remise en état des sols après travaux</li>
          <li>Élimination des résidus de chantier</li>
          <li>Décapage et métallisation sur demande</li>
        </ul>
      </div>
      <!-- Bloc 4 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-8 border-blue-600 group hover:border-red-600 transition-all duration-300">
        <h3 class="text-xl font-bold mb-3 group-hover:text-red-600 transition-colors">🪟 Nettoyage de Vitres</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Nettoyage intérieur et extérieur des surfaces vitrées</li>
          <li>Entretien des vitrines commerciales</li>
        </ul>
      </div>
      <!-- Bloc 5 -->
      <div class="bg-white p-6 shadow-md rounded-lg border-l-8 border-blue-600 group hover:border-red-600 transition-all duration-300 md:col-span-2">
        <h3 class="text-xl font-bold mb-3 group-hover:text-red-600 transition-colors">🌱 Entretien des Espaces Verts</h3>
        <ul class="list-disc pl-5 space-y-1 text-gray-700 text-sm">
          <li>Tonte, taille, désherbage</li>
          <li>Ramassage des feuilles et entretien des abords</li>
        </ul>
      </div>
    </div>

    <!-- Pourquoi choisir 2N -->
    <div class="mt-16 max-w-5xl mx-auto px-4">
      <h4 class="text-3xl md:text-4xl font-bold text-blue-800 mb-8 text-center">Pourquoi Choisir 2N MULTI SERVICES&nbsp;?</h4>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 w-full">
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Intervention rapide et efficace</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Équipes qualifiées & équipements professionnels</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Solutions sur-mesure et personnalisées</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105">
          <span class="text-lg md:text-2xl text-gray-700">Respect strict des normes d’hygiène et de sécurité</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
        <div class="flex items-center justify-between px-2 py-2 transition-transform duration-200 hover:scale-105 md:col-span-2">
          <span class="text-lg md:text-2xl text-gray-700">Propreté irréprochable pour une meilleure image</span>
          <span class="text-green-600 text-2xl"><i class="fas fa-check-circle"></i></span>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-16">
      <a href="/contact"
         class="px-8 py-4 rounded-lg text-white text-lg font-semibold bg-blue-700 hover:bg-red-700 transition-colors duration-300 shadow-lg hover:scale-105">
        Contactez-nous
      </a>
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
      <div>
        <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li><a href="/" class="hover:text-white transition">Accueil</a></li>
          <li><a href="/services" class="hover:text-white transition">Nos services</a></li>
          <li><a href="/offres" class="hover:text-white transition">Recrutement</a></li>
          <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
        </ul>
      </div>
      <!-- Contact -->
      <div class="text-center">
        <h3 class="text-lg font-semibold mb-4">Contact</h3>
        <p class="text-gray-400 text-sm mb-2"><i class="fas fa-phone mr-2"></i>+228 90 00 00 00</p>
        <p class="text-gray-400 text-sm mb-2"><i class="fas fa-envelope mr-2"></i>contact@2n-multiservices.tg</p>
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
