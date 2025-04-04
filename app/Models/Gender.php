<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'name'
    ];
    public function Superheroe(){
        return $this->hasMany(Superheroe::class);
    }
}
