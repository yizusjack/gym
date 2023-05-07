<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre_e', 
    'fecha_i_e',
    'fecha_f_e',
    'paises_id',
    'competencias_id',
    'user_id'];
    
    public function competencias(){
        return $this->belongsTo(Competencia::class);
    }

    public function paises(){
        return $this->belongsTo(Pais::class);
    }
}
