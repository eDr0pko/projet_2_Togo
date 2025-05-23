<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;


    class LoginController extends Controller
    {
        public function showLoginForm()
        {
            if (session()->has('user_id')) {
                return redirect('/home');
            }

            return view('connexion');
        }

        public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // Requête manuelle sur la table utilisateurs
            $user = DB::table('utilisateurs')->where('mail', $credentials['email'])->first();

            if ($user && Hash::check($credentials['password'], $user->mot_de_passe)) {
                session(['user_id' => $user->mail]); // Stocke dans la session
                return redirect('/home');
            }

            return back()->withErrors(['email' => 'Identifiants invalides'])->withInput();
        }

        public function logout()
        {
            session()->forget('user_id');
            return redirect('/login');
        }
        
    }
?>


