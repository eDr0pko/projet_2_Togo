<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Models\Offre;

    class OffreController extends Controller
    {
        public function index()
        {
            if (!session()->has('user_id')) {
                return redirect('/login');
            }

            $offres = Offre::with('candidatures')->get();
            return view('home', compact('offres'));
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

        public function dashboard()
        {
            $offres = Offre::with('candidatures')->get();
            return view('home', compact('offres'));
        }

        public function getCandidatures($offre_id)
        {
            $candidatures = \App\Models\Candidature::where('offre_id', $offre_id)->get();
            return response()->json($candidatures);
        }

        public function changerPublication(Request $request, $id)
        {
            $request->validate([
                'publiee' => 'required|boolean',
            ]);

            DB::table('offres')->where('id', $id)->update([
                'publiee' => $request->publiee
            ]);

            return response()->json(['success' => true]);
        }

    }
?>


