<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $guarded = [];

    public function responsable()
    {
        return $this->belongsTo(Profile::class);
    }
    
    public function equipement()
    {
        return $this->belongsTo(Equipement::class);
    }
}
