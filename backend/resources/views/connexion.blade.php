<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion - 2N MULTI SERVICE</title>
        <link href="{{ asset('src/output.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">
        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/LOGO 2N MULTI SERVICES.png') }}" alt="Logo 2N MULTI SERVICE" class="h-32 object-contain">
            </div>

            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Connexion à votre espace</h2>

            <form method="POST" action="{{ url('/login') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-gray-700 mb-1">Adresse email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="votre@email.com" />
                </div>

                <div>
                    <label for="password" class="block text-gray-700 mb-1">Mot de passe</label>
                    <input type="password" name="password" id="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********"/>
                </div>

                @if($errors->any())
                    <p class="text-red-500 text-sm text-center">{{ $errors->first() }}</p>
                @endif

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Se connecter</button>
            </form>
        </div>
    </body>
</html>


