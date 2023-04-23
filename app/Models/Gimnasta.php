<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gimnasta extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function paises(){
        return $this->belongsTo(Pais::class);
    }

    protected $fillable = ['nombre_g', 'apellido_g', 'fecha_n_g', 'paises_id',];
}
