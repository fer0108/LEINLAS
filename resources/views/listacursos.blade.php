@extends('layouts.estilos')
@section('content')
<table class="table table-hover table-bordered">
    <thead class="table-dark">
        <tr>
        <th>LECCION</th>
        <th>IMAGEN</th>
        <th>AUDIOS</th>
        <th>CONTENIDO</th>
        <th>INFORMACIÓN</th>

            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
        
            <td>{{$item->leccion_id}}</td>
            <td
            
            <td
            <td>{{$item->imagen_id}}</td>
            <td
            
            <td
            <td>{{$item->audios_id}}</td>
            <td
           
            <td
            <td>{{$item->datos_id}}</td>
            <td
            
            <td
            <td>{{$item->contenido}}</td>
            

            <td>
                <a href="/curso/edit/{{$item->id}}">Editar</a>

                <form action="{{url('curso', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection