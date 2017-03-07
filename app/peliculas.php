<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    protected $fillable = ['titulo','genero','protagonistas','idioma','duracion'];
}
