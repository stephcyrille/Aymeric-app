<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

use App\Personne;


class PersonneController extends Controller
{
    public function list(){

        $liste_personne = Personne::all(); 
        $context = [
            'liste_personne' => $liste_personne,
        ];

        return view('personnes.all', $context);
    }
    
    public function addForm(){

        return view('personnes.add');
    }

    public function import(Request $request){
        $request->validate([
            'selected_file' => 'required|mimes:xls,xlsx'
        ]);

        $path = $request->file('selected_file')->getRealPath();
        $data = Excel::load($path)->get();
        if($data->count() > 0){
            foreach ($data->toArray() as $key => $value) {
                foreach ($value as $row) {
                    $insert_data = [
                        'id' => $row['id'],
                        'nom' => $row['nom'],
                        'prenom' => $row['prenom'],
                        'detail' => $row['detail'],
                    ];
                }
            }
        }
        
        dd($insert_data);

        if(!empty($insert_data)){
            dd($insert_data);
        }

        return redirect()->route('all_persons');
    }
}
