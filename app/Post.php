<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['fecha_creacion'];

    

    public function facultad () {
        return $this->belongsTo(facultad::class);
    }
}
