<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Equipement;
use App\Tache;



class TacheController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste(){
        $taches = Tache::all();
        // dd($taches);
        $context = [
            'taches' => $taches,
        ];
        return view('taches.all', $context);
    }


    public function formulaire(){
        $profiles = Profile::where('role', 'Technicien')->get();
        $equipements = Equipement::all();
        $context = [
            'profiles' => $profiles,
            'equipements' => $equipements,
        ];

        return view('taches.add', $context);
    }


    public function ajouter(){
        
        $data = request()->validate([
          'libelle' => 'required',
          'description' => 'required',
          'date_debut' => 'required',
          'date_fin' => 'required',
          'responsable_id' => 'required',
          'equipement_id' => 'required'   
        ]);
        
        // dd($data); 
        Tache::create($data);

        return redirect()->route('liste_taches');
    }
}
