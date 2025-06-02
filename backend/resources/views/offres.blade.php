<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nos Offres - 2N MULTI SERVICE</title>

        <link href="{{ asset('src/output.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <script type="module" src="js/main.js" defer></script>
    </head>
    <body class="bg-gray-50 text-gray-800">
        <header>
            <!-- VERSION PC/TABLETTE GRANDE (inchangée) -->
            <div class="pb-20 hidden md:flex flex-row justify-between items-center z-10 relative px-[3%] bg-[url('../images/0F7A6951.jpg')] bg-cover bg-black/20 bg-center backdrop-blur-sm gap-10" style="background-position: center -300px;">
                <img src="../images/LOGO 2N MULTI SERVICES.png" alt="logo" class="w-[15%] h-[15%]" />
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
                    <input id="searchInput" type="search" name="search" placeholder="Rechercher..."
                        class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">

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
                    <input id="searchInput" type="search" name="search" placeholder="Rechercher..."
                        class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 shadow-sm border border-gray-300" autocomplete="off">

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

            <!-- HR (valable pour toutes tailles d'écran) -->
            <hr class="relative z-10 h-px bg-white border-0 dark:bg-white" />
        </header>

        <main id="Offres" class="relative bg-gray-50 text-gray-800 py-16 px-4 sm:px-6 lg:px-8">

            <!-- Section Header avec Logo -->
            <div class="max-w-5xl mx-auto text-center mb-16">
                <img src="{{ asset('images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N Multi Services"
                    class="mx-auto h-20 md:h-24 mb-6 animate-fade-in-down">
                <h2 id="Recrutement"
                    class="text-4xl md:text-5xl font-extrabold text-blue-700 tracking-tight animate-fade-in-up">
                    Nos Offres d’Emploi
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto animate-fade-in-down">
                    Rejoignez une entreprise dynamique et innovante où chaque talent compte.
                </p>
            </div>

            <!-- Message de succès -->
            @if(session('success'))
                <div class="bg-green-100 text-green-800 border border-green-400 px-4 py-3 rounded mb-6 max-w-3xl mx-auto text-center animate-fade-in-down">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Offres -->
            @if ($offres->isEmpty())
                <p class="text-center text-gray-500 text-lg animate-fade-in-down">
                    Aucune offre disponible pour le moment.
                </p>
            @else
                <div class="grid gap-10 md:grid-cols-2 max-w-5xl mx-auto">
                    @foreach ($offres as $offre)
                        <div class="group bg-white p-6 rounded-xl shadow-xl border border-blue-100 
                                    transform transition duration-300 hover:scale-105 hover:shadow-2xl animate-slide-up opacity-0">
                            <div class="flex flex-col justify-between h-full">
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700 mb-2 group-hover:text-red-600 transition duration-300">
                                        {{ $offre->titre }}
                                    </h3>
                                    <p class="text-gray-700 text-sm leading-relaxed">{!! nl2br(e($offre->description)) !!}</p>
                                </div>
                                <div class="mt-6 text-right">
                                    <a href="{{ route('offres.show', $offre->id) }}"
                                    class="inline-block bg-blue-600 hover:bg-red-600 text-white px-5 py-2 rounded-lg text-sm font-semibold shadow-md transition-all duration-300 ease-in-out">
                                        Postuler →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </main>

        <!-- ANIMATIONS (à placer en bas du layout ou de la page) -->
        <script>
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        entry.target.classList.remove('opacity-0');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.animate-slide-up').forEach(el => {
                observer.observe(el);
            });
        </script>

        <style>
            @keyframes fade-in-up {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fade-in-down {
                0% {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up 0.6s ease-out forwards;
            }

            .animate-fade-in-down {
                animation: fade-in-down 0.6s ease-out forwards;
            }

            .animate-slide-up {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.5s ease-out;
            }
        </style>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white mt-20">
            <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center items-center">
                
                <!-- Logo et description -->
                <div>
                <img src="../images/LOGO 2N MULTI SERVICES.png" alt="Logo 2N Multi Service" class="w-40 mb-4 mx-auto">
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

                <div class="flex justify-center space-x-4 text-xl">
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


