<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table = 'lecciones';
    public function  Curso()

    {
            return $this->hasMany(Curso::Class);

    }
}
