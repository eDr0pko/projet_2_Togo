<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dashboard - 2N MULTI SERVICE</title>

    <!-- Tailwind -->
    <link href="{{ asset('src/output.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- JS -->
    <script src="{{ asset('js/home.js') }}" defer></script>

    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .transition-transform {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 scroll-smooth">

    <!-- Header -->
    <header class="bg-blue-700 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between px-4 py-5">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N"
                     class="h-14 w-auto rounded bg-white p-1 shadow-inner animate-fade-up">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold tracking-wide animate-fade-up">2N MULTI SERVICE</h1>
                    <p class="text-sm text-blue-200 animate-fade-up">Gestion des offres d'emploi</p>
                </div>
            </div>
            <i class="fa-solid fa-briefcase text-2xl animate-fade-up"></i>
        </div>
    </header>

    <!-- Main -->
    <main class="container mx-auto px-4 py-10">

        <!-- Formulaire de création d'offre -->
        <section class="max-w-3xl mx-auto bg-white border border-blue-100 p-8 rounded-2xl shadow-lg mb-16 animate-fade-up">
            <h2 class="text-2xl font-bold text-blue-700 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-plus-circle text-blue-500"></i> Nouvelle offre d’emploi
            </h2>
            <form id="form-offre" class="space-y-6">
                <div>
                    <label for="titre" class="block font-semibold mb-1 text-sm text-gray-700">Titre de l'offre</label>
                    <input type="text" id="titre" name="titre" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 outline-none transition-all duration-200">
                </div>
                <div>
                    <label for="description" class="block font-semibold mb-1 text-sm text-gray-700">Description</label>
                    <textarea id="description" name="description" required rows="4"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 outline-none transition-all duration-200"></textarea>
                </div>
                <button type="submit"
                        class="bg-blue-600 hover:bg-red-600 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition-transform hover:scale-105">
                    <i class="fa-solid fa-paper-plane mr-2"></i> Publier l’offre
                </button>
            </form>
        </section>

        <!-- Liste des offres -->
        <section class="animate-fade-up">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-list text-blue-600"></i> Offres publiées
            </h2>
            <div id="liste-offres" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($offres as $offre)
                    <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl border border-gray-200 transition-transform hover:scale-[1.03] cursor-pointer relative overflow-hidden animate-fade-up">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 text-xs font-semibold rounded-bl-xl shadow-md">Nouveau</div>
                        <h3 class="text-xl font-bold text-blue-700 mb-2 group-hover:text-red-600 transition-colors">
                            {{ $offre->titre }}
                        </h3>
                        <p class="text-gray-700 text-sm leading-relaxed">{!! nl2br(e($offre->description)) !!}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Candidatures -->
        <section id="section-candidatures" class="mt-16 hidden animate-fade-up">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-users text-gray-600"></i> Candidatures reçues
            </h2>
            <div id="liste-candidatures" class="space-y-4 text-sm text-gray-700">
                <!-- Candidatures injectées dynamiquement -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm">
        &copy; 2025 <span class="text-white font-semibold">2N MULTI SERVICE</span> — Tous droits réservés.
        <br />
        Développé par 
        <a href="https://neostart.tech/" target="_blank" class="text-blue-400 hover:underline hover:text-red-400 transition">
            Neostart.tech
        </a>
    </footer>

    <!-- Animation au scroll -->
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-up');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-fade-up').forEach(el => observer.observe(el));
    </script>
</body>
</html>
