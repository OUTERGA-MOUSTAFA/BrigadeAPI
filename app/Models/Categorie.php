<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];
    function plat(){
        return $this->hasMany(Plat::class);
    }
    
    function user()
    {
        return $this->belongsTo(User::class);
    }
}