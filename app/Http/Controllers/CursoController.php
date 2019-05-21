<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Leccion;
use App\Imagen;
use App\Audio;
use App\Datos;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Curso::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leccion = leccion::all();
        $imagen = imagen::all();
        $audios = Audio::all();
        $datos = Datos::all();
        return view('crearcursos', compact('leccion','imagen','audios','datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Curso();

        $model->leccion_id = $request['leccion_id'];
        $model->imagen_id = $request['imagen_id'];
        $model->audios_id = $request['audios_id'];
        $model->datos_id = $request['datos_id'];
        $model->contenido = $request['contenido'];
        

        $model->save();
        return redirect('cursos/listacursos');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso, $id)
    {
        $registroencontrado  = curso::find($id);
        return $registroencontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('editar', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->leccion_id = $request['leccion_id'];
        $curso->imagen_id = $request['imagen_id'];
        $curso->audios_id = $request['audios_id'];
        $curso->datos_id = $request['datos_id'];
        $curso->contenido = $request['contenido'];
        
        $curso->save();
        return redirect('cursos/listacursos');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(curso $curso)
    {
        $curso->delete();
        return redirect('cursos/listacursos');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listacursos', ['rs' => $rs]);


    }
}
