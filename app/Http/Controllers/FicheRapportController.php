<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FicheRapportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste(){
    //   $equipements = Equipement::all();
    //   $context = [
    //     'equipements' => $equipements,
    //   ];

    //   return view('equipements.all', $context);
      return view('report.all');
    }
    public function ajouter(){
    //   $equipements = Equipement::all();
    //   $context = [
    //     'equipements' => $equipements,
    //   ];

    //   return view('equipements.all', $context);
      return view('report.add');
    }
 //
}
