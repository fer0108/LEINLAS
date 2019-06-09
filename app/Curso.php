<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';


    public function Leccion()
    {

        return $this-> belongsTo(Leccion::class);

    }

    public function Imagen()
    {

        return $this-> belongsTo(imagen::class);

    }

    public function audio()
    {

        return $this-> belongsTo(audio::class);

    }
    public function datos()
    {

        return $this-> belongsTo(dato::class);

    }
}