<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard - 2N MULTI SERVICE</title>

        {{-- CSS Tailwind --}}
        <link href="{{ asset('src/output.css') }}" rel="stylesheet">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        {{-- JS --}}
        <script src="{{ asset('js/home.js') }}" defer></script>
    </head>
    <body class="bg-gray-50 min-h-screen text-gray-800">

        <!-- Header avec logo -->
        <header class="bg-blue-700 text-white py-6 shadow">
            <div class="container mx-auto flex items-center justify-between px-4">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N" class="h-14 w-auto rounded bg-white p-1 shadow-inner">
                    <div>
                        <h1 class="text-3xl font-bold">2N MULTI SERVICE</h1>
                        <p class="text-sm text-blue-100">Gestion des offres d'emploi</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-briefcase text-2xl"></i>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="container mx-auto px-4 py-10">
            <!-- Formulaire -->
            <section class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg mb-12 border border-blue-100">
                <h2 class="text-2xl font-semibold text-blue-700 mb-6 flex items-center">
                    <i class="fa-solid fa-plus-circle mr-2 text-blue-500"></i> Ajouter une nouvelle offre
                </h2>
                <form id="form-offre" class="space-y-6">
                    <div>
                        <label for="titre" class="block font-medium mb-2">Titre de l'offre</label>
                        <input type="text" id="titre" name="titre" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    </div>
                    <div>
                        <label for="description" class="block font-medium mb-2">Description</label>
                        <textarea id="description" name="description" required rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
                    </div>
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
                        <i class="fa-solid fa-paper-plane mr-2"></i> Publier l'offre
                    </button>
                </form>
            </section>

            <!-- Offres -->
            <section>
                <h2 class="text-xl font-semibold text-gray-700 mb-4 flex items-center">
                    <i class="fa-solid fa-list mr-2 text-gray-500"></i> Offres publiées
                </h2>
                <div id="liste-offres" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Offres générées dynamiquement -->
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-center py-4 mt-10 text-sm text-gray-600">
            &copy; 2025 2N MULTI SERVICE. Tous droits réservés. Développé par
            <a href="https://neostart.tech/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">Neostart.tech</a>.
        </footer>

    </body>
</html>


