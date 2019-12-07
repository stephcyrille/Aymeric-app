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
                    // dd($value);
                    $insert_data[] = array(
                        'flag_technique_ou_geographique' => $value['flag_technique_ou_geographique'],
                        'code_geographique_parent' => $value['code_geographique_parent'],
                        'code_parent' => $value['code_parent'],
                        'code_equipement' => $value['code_equipement'],
                        'description_equipement' => $value['description_equipement'],
                        'code_famille' => $value['code_famille'],
                        'description_famille' => $value['description_famille'],
                        'code_zone' => $value['code_zone'],
                        'description_zone' => $value['description_zone'],
                        'code_fonction' => $value['code_fonction'],
                        'description_fonction' => $value['description_fonction'],
                        'centre_de_charge' => $value['centre_de_charge'],
                        'description_centre_de_charge' => $value['description_centre_de_charge'],
                        'entite' => $value['entite'],
                        'decription_entite' => $value['decription_entite'],
                        'date_de_mise_en_service' => $value['date_de_mise_en_service'],
                        'code_constructeur' => $value['code_constructeur'],
                        'reference_fabricant' => $value['reference_fabricant'],
                        'no_serie_reparable' => $value['no_serie_reparable'],
                        'activite' => $value['activite'],
                        'code_oaci' => $value['code_oaci'],
                        'mainteneur' => $value['mainteneur'],
                    );

            }
        }
        
        dd($insert_data);

        if(!empty($insert_data)){
            dd($insert_data);
        }

        return redirect()->route('all_persons');
    }
}
