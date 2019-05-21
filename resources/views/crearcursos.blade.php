


<form action="/cursos" method="POST" role="form">
    @csrf()
    <legend>PERFILES</legend>
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
    </form>
</div>

