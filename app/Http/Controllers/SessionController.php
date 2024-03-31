<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function afficherFormulaire()
    {
        return view('formulaire.form');
    }

    public function traiterFormulaire(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'mot_de_passe' => 'required|string',
            'fichier' => 'required|file',
            'date_naissance' => 'required|date',
            'abonne' => 'required|in:oui,non',
        ]);
    
        // Move the uploaded file to a permanent location
        $fichierChemin = $request->file('fichier')->store('files', 'public');
    
        // Store the file path in session or database
        $donnees = $request->except('fichier');
        $donnees['fichier_chemin'] = $fichierChemin;
        session(['arganiers' => $donnees]);
        session()->flash('nenuge', 'Bienvenue');
    
        return redirect()->route('afficherSession');
    }
    
}
