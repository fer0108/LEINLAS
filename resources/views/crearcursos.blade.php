
@extends('layouts.estilos')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-3">
    <h1 class="display-5 text-center">Audios para agregar</h1>
  </div>
  <div class="col-md-6">
  <h1 class="text-center">PERFILES</h1>
<form action="/cursos" method="POST" role="form">
    @csrf()
    <div>
    </div>
      @csrf()
        <legend>Guardar curso</legend>

        <div class="form-group">
           
        @component('componentes.select', ['name'=>'leccion_id', 'data' =>$leccion, 'tag'=> 'leccion', 'label'=>'LECCIONES' ])
        @endcomponent

        @component('componentes.select', ['name'=>'imagen_id', 'data' =>$imagen, 'tag'=> 'imagen', 'label'=>'IMAGENES' ])
        @endcomponent
        @component('componentes.select', ['name'=>'audios_id', 'data' =>$audios, 'tag'=> 'audio', 'label'=>'AUDIOS' ])
        @endcomponent
        @component('componentes.select', ['name'=>'datos_id', 'data' =>$datos, 'tag'=> 'contenido', 'label'=>'CONTENIDO' ])
        @endcomponent
        @component('componentes.text', ['name' => 'contenido', 'label' => 'CONTENIDO', 'placeholder' =>'Ingrese el COTENIDO'])
        @endcomponent
        <div>
       

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/perfiles/lista" class="btn btn-success"><i class="fas fa-address-book">Lista</i></a></a>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
</div>
</div>
</div>
