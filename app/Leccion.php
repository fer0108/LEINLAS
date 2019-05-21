<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table = 'lecciones';
    public function  cursos()

    {
            return $this->hasMany(Curso::Class);

    }
}
