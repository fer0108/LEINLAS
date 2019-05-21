<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table = 'Audios';
    public function  cursos()

    {
            return $this->hasMany(Curso::Class);

    }
}