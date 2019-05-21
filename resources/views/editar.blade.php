<form action="{{url('curso', $curso->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><strong>curso</strong></legend>

        <div class="form-group">
            <label for="">Leccion</label>
            <input value="{{$curso->leccion_id}}" name="leccion_id" type="text" class="form-control" id="leccion_id" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Imagen</label>
            <input value="{{$curso->imagen_id}}" name="imagen_id" type="text" class="form-control" id="imagen_id" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Audios</label>
            <input value="{{$curso->audios_id}}" name="audios_id" type="text" class="form-control" id="audios_id" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Contenido</label>
            <input value="{{$curso->datos_id}}" name="datos_id" type="text" class="form-control" id="datos_id" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Informacion</label>
            <input value="{{$curso->contenido}}" name="contenido" type="text" class="form-control" id="contenido" placeholder="Ingresar entdidad">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</body>
</html>