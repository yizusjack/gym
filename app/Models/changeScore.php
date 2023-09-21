<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class changeScore extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function scores(){
        return $this->belongsTo(Score::class);
    }
}
