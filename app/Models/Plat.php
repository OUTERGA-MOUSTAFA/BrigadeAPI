<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
     protected $fillable = [
        'name',
        'description',
        'prix',
        'photo',
        'categorie_id',
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
