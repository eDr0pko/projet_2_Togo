<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nos Offres - 2N MULTI SERVICE</title>

        <link href="{{ asset('src/output.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>
    <body class="bg-gray-50 text-gray-800">

        <header class="bg-blue-700 text-white py-6 shadow">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N" class="h-14 w-auto rounded bg-white p-1 shadow-inner">
                    <div>
                        <h1 class="text-4xl font-bold">2N MULTI SERVICE</h1>
                        <p class="text-sm text-blue-100">Rejoignez nos équipes</p>
                    </div>
                </div>
                <i class="fa-solid fa-briefcase text-2xl"></i>
            </div>
        </header>

        <main class="container mx-auto px-4 py-10">
            <h2 class="text-3xl font-semibold text-blue-700 mb-8 text-center">Nos Offres d’Emploi</h2>

            @if ($offres->isEmpty())
                <p class="text-center text-gray-500">Aucune offre disponible pour le moment.</p>
            @else
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($offres as $offre)
                        <div class="bg-white p-6 rounded-xl shadow-md border border-blue-100 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-semibold text-blue-600 mb-2">{{ $offre->titre }}</h3>
                                <p class="text-gray-700 text-sm">{{ $offre->description }}</p>
                            </div>
                            <div class="mt-4 text-right">
                                <a href="{{ route('offres.show', $offre->id) }}"
                                class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition">
                                    Postuler
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </main>

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
                    <li><a href="#home" class="hover:text-white transition">Accueil</a></li>
                    <li><a href="#about" class="hover:text-white transition">À propos</a></li>
                    <li><a href="#services" class="hover:text-white transition">Nos services</a></li>
                    <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                </ul>
                </div>

                <!-- Contact & Réseaux -->
                <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <p class="text-gray-400 text-sm mb-2"><i class="fas fa-phone mr-2"></i>+228 90 00 00 00</p>
                <p class="text-gray-400 text-sm mb-2"><i class="fas fa-envelope mr-2"></i>contact@2nmultiservice.com</p>
                <p class="text-gray-400 text-sm mb-4"><i class="fas fa-map-marker-alt mr-2"></i>Lomé, Togo</p>

                <div class="flex justify-center space-x-4 text-xl">
                    <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
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


