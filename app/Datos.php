<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table = 'Datos';
    public function  cursos()

    {
            return $this->hasMany(Curso::Class);

    }
}