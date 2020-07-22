<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tache;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function listeDesTaches()
    {
        $taches = Tache::all();

        return $taches->toJson(JSON_PRETTY_PRINT);
        // echo json_encode($taches);
    }

}
