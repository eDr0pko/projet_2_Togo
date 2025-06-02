<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Candidature - {{ $offre->titre }}</title>
        <link href="{{ asset('src/output.css') }}" rel="stylesheet" />
        <style>
            /* Animations personnalisées */
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
            .animate-fade-in-up {
                animation: fade-in-up 0.6s ease-out forwards;
            }

            @keyframes pulse-blue {
                0%, 100% {
                    box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
                }
                50% {
                    box-shadow: 0 0 15px 5px rgba(59, 130, 246, 0.3);
                }
            }
            .pulse-blue {
                animation: pulse-blue 2s infinite;
            }

            /* Scroll reveal helper */
            .opacity-0 {
                opacity: 0;
            }
            .transform-up {
                transform: translateY(30px);
                transition: all 0.5s ease-out;
            }
            .visible {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
        </style>
    </head>
    <body class="bg-gray-50 text-gray-900 font-sans">

        <header class="max-w-2xl mx-auto px-6 py-6 flex items-center justify-between border-b border-gray-300">
            <img src="{{ asset('../images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N Multi Services" class="h-12 md:h-16 animate-pulse" />
            <a href="{{ route('offres.index') }}"
            class="text-gray-800 hover:text-blue-700 transition font-medium bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded shadow-sm">
            ← Retour aux offres
            </a>
        </header>

        <main class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8 mt-12 mb-20
                    border border-blue-300 hover:shadow-2xl transition-shadow duration-500">

            <h1 class="text-4xl font-extrabold text-blue-700 mb-6 text-center animate-fade-in-up">
                Postuler à l'offre :<br><span class="text-red-600">{{ $offre->titre }}</span>
            </h1>

            <p class="text-gray-700 mb-8 text-justify leading-relaxed animate-fade-in-up">
                {{ $offre->description }}
            </p>

            <form action="{{ route('candidatures.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <input type="hidden" name="offre_id" value="{{ $offre->id }}">

                <div class="animate-fade-in-up transform-up opacity-0">
                    <label for="nom" class="block mb-2 font-semibold text-gray-800">Nom :</label>
                    <input id="nom" type="text" name="nom" required
                        class="w-full border border-gray-300 rounded-md px-4 py-3
                            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                            transition duration-300"
                        value="{{ old('nom') }}" />
                    @error('nom') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="animate-fade-in-up transform-up opacity-0 delay-100">
                    <label for="prenom" class="block mb-2 font-semibold text-gray-800">Prénom :</label>
                    <input id="prenom" type="text" name="prenom" required
                        class="w-full border border-gray-300 rounded-md px-4 py-3
                            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                            transition duration-300"
                        value="{{ old('prenom') }}" />
                    @error('prenom') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="animate-fade-in-up transform-up opacity-0 delay-200">
                    <label for="cv" class="block mb-2 font-semibold text-gray-800">CV (PDF ou Word) :</label>
                    <input id="cv" type="file" name="cv" required
                        accept=".pdf,.doc,.docx"
                        class="w-full border border-gray-300 rounded-md px-3 py-2
                            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                            transition duration-300" />
                    @error('cv') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="animate-fade-in-up transform-up opacity-0 delay-300">
                    <label for="lettre" class="block mb-2 font-semibold text-gray-800">
                        Lettre de motivation ou informations complémentaires (facultatif) :
                    </label>
                    <textarea id="lettre" name="lettre" rows="5"
                        class="w-full border border-gray-300 rounded-md px-4 py-3 resize-y
                            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                            transition duration-300">{{ old('lettre') }}</textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-700 hover:bg-red-600 text-white font-bold py-3 rounded-md
                        shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1
                        focus:outline-none focus:ring-4 focus:ring-red-400 pulse-blue">
                    Envoyer ma candidature
                </button>
            </form>
        </main>

        <footer class="text-center text-gray-600 text-sm mb-8 select-none">
            &copy; {{ date('Y') }} 2N Multi Service - Tous droits réservés
        </footer>

        <!-- SCRIPT pour reveal animations au scroll -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const elements = document.querySelectorAll('.transform-up.opacity-0');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15 });

                elements.forEach(el => observer.observe(el));
            });
        </script>
    </body>
</html>


