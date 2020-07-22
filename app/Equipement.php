<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $guarded = [];
    
    public function tache()
    {
        return $this->hasOne(Tache::class);
    }
}
