<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[
        'name_el',
        'alias_el',
        'description_el',
        'value_el',
        'category_el',
        'aparatos_id',
    ];
}
