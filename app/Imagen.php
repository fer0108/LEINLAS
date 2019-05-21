<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'Imagenes';
    public function  cursos()

    {
            return $this->hasMany(Curso::Class);

    }
}