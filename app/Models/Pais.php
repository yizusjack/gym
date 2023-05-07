<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'paises';

    public $timestamps = false;

    public function gimnastas(){
        return $this->hasMany(Gimnasta::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
