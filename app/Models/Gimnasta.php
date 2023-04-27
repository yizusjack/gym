<?php

namespace App\Models;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Gimnasta extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function paises(){
        return $this->belongsTo(Pais::class);
    }

    public function pictures(){
        return $this->hasMany(Picture::class);
    }

    protected $fillable = ['nombre_g', 'apellido_g', 'fecha_n_g', 'paises_id',];
}
