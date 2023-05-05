<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre_c', 'tipo_c',];
}
