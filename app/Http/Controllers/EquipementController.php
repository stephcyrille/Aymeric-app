<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipement;



class EquipementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste(){
      $equipements = Equipement::all();
      $context = [
        'equipements' => $equipements,
      ];

      return view('equipements.all', $context);
    }


    public function ajouter(){
        return view('equipements.add');
    }
    
    public function poster(){
        

        $data = request()->validate([
          'nom' => 'required',
          'fabriquant' => 'required',
          'numero_serie' => 'required',
          'numero_model' => 'required',
          'emplacement' => 'required',
          'frequence_maitenance' => 'required'   
        ]);
        
        // dd($data); 
        Equipement::create($data);

        return redirect()->route('liste_equipements');
    }
}
