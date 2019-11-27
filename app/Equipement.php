<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    public function tache()
    {
        return $this->hasOne(Tache::class);
    }
}
