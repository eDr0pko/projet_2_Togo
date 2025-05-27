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
                'nom' => 'required|string|max:100',
                'prenom' => 'required|string|max:100',
                'offre_id' => 'required|exists:offres,id',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
                'lettre' => 'nullable|string',
            ]);

            // Récupérer le fichier
            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension();

            // Nettoyage des champs nom/prénom pour qu'ils soient safe dans un nom de fichier
            $nom = preg_replace('/[^a-zA-Z0-9_-]/', '', strtolower($request->nom));
            $prenom = preg_replace('/[^a-zA-Z0-9_-]/', '', strtolower($request->prenom));

            // Générer un nom unique
            $random = substr(uniqid(), -6); // séquence courte aléatoire
            $finalName = "cv_{$nom}_{$prenom}_{$random}.{$extension}";

            // Déplacement du fichier
            $destinationPath = public_path('cv');
            $file->move($destinationPath, $finalName);

            // Enregistrement en base de données
            Candidature::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'offre_id' => $request->offre_id,
                'cv' => $finalName,
                'lettre' => $request->lettre,
            ]);

            return redirect()->route('offres.index')->with('success', 'Votre candidature a été envoyée avec succès.');
        }



    }
    
?>


