<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'title_p',
        'description_p',
        'url_p',
    ];
}
