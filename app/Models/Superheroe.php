<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use HasFactory;
    
    protected $table = 'superheroes';

    protected $fillable = [
        'gender_id',
        'universe_id',
        'name',
        'realName',
        'Picture'
    ];
    public function Universo(){
        return $this->belongsTo(Universe::class);
    }
    public function genero(){
        return $this->belongsTo(Gender::class);
    }
}
}
