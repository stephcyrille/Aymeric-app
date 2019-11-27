<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded = [];

    public function destinator()
    {
        return $this->belongsTo(Profile::class);
    }

    public function expeditor()
    {
        return $this->belongsTo(Profile::class);
    }
}
