<!-- resources/views/candidature.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Candidature - {{ $offre->titre }}</title>
    <link href="{{ asset('src/output.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <main class="max-w-2xl mx-auto py-12 px-6 bg-white rounded-lg shadow">
        <div class="flex justify-between mt-6">
            <a href="{{ route('offres.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md text-sm">
                ← Retour aux offres
            </a>
        </div>
        <div class="border-b border-gray-200 mb-5 mt-4"></div>

        <h1 class="text-3xl font-bold text-blue-700 mb-4">Postuler à l'offre {{ $offre->titre }}</h1>
        <p class="text-gray-700 mb-6">{{ $offre->description }}</p>

        <form action="{{ route('candidatures.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="offre_id" value="{{ $offre->id }}">

            <div>
                <label class="block mb-1 font-semibold">Nom :</label>
                <input type="text" name="nom" required class="w-full border rounded px-3 py-2" value="{{ old('nom') }}">
                @error('nom') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold">Prénom :</label>
                <input type="text" name="prenom" required class="w-full border rounded px-3 py-2" value="{{ old('prenom') }}">
                @error('prenom') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold">CV (PDF ou Word) :</label>
                <input type="file" name="cv" required class="w-full border rounded px-3 py-2">
                @error('cv') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold">Lettre de motivation (facultatif) :</label>
                <textarea name="lettre" rows="5" class="w-full border rounded px-3 py-2">{{ old('lettre') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded">
                Envoyer ma candidature
            </button>
        </form>
    </main>
</body>
</html>


