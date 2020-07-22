<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $guarded = [];
    protected $with = ['responsable'];

    
    // public function getResponsableIdAttribute(){
    //     // return $this->responsable->nom;
    //     return $this->attribute['responsable_id'] === $this->responsable->nom;

    // }
    public function responsable()
    {
        return $this->belongsTo(Profile::class);
    }
    
    public function equipement()
    {
        return $this->belongsTo(Equipement::class);
    }
}
