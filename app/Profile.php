<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'adresse', 'role', 'email', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tache()
    {
        return $this->hasOne(Tache::class);
    }
    
    public function notification()
    {
        return $this->hasOne(Tache::class);
    }
}
