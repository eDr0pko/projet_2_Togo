<?php

   namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Offre;
    use App\Models\Candidature;

    class RecrutementController extends Controller
    {
        public function index()
        {
            $offres = Offre::where('publiee', true)->get();
            return view('offres', compact('offres'));
        }

        

        public function show($id)
        {
            $offre = Offre::findOrFail($id);
            return view('candidature', compact('offre'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'offre_id' => 'required|exists:offres,id',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
                'lettre' => 'nullable|string',
            ]);

            // Stockage du fichier CV
            $path = $request->file('cv')->store('cvs', 'public');

            Candidature::create([
                'offre_id' => $request->offre_id,
                'cv' => $path,
                'lettre' => $request->lettre,
            ]);

            return redirect()->route('offres.index')->with('success', 'Votre candidature a été envoyée avec succès.');
        }

    }
    
?>


