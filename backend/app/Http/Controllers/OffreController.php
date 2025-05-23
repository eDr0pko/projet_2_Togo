<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class OffreController extends Controller
    {
        public function index()
        {
            // Vérifie si l'utilisateur est connecté (via session 'user_id')
            if (!session()->has('user_id')) {
                return redirect('/login');
            }
            return view('home');
        }

        public function getOffres()
        {
            $offres = DB::table('offres')->orderByDesc('id')->get();
            return response()->json($offres);
        }

        public function addOffre(Request $request)
        {
            $request->validate([
                'titre' => 'required|string',
                'description' => 'required|string',
            ]);

            DB::table('offres')->insert([
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

            return response()->json(['success' => true]);
        }

        public function updateOffre(Request $request, $id)
        {
            $request->validate([
                'titre' => 'required|string',
                'description' => 'required|string',
            ]);

            DB::table('offres')->where('id', $id)->update([
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

            return response()->json(['success' => true]);
        }

        public function deleteOffre($id)
        {
            DB::table('offres')->where('id', $id)->delete();
            return response()->json(['success' => true]);
        }
    }
?>


