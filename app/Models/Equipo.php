<?php

namespace App\Models;

use App\Models\Pais;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['paises_id', 
    'events_id'];

    public function paises(){
        return $this->belongsTo(Pais::class);
    }

    public function events(){
        return $this->belongsTo(Event::class);
    }
}
