@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Actualizar de Profesor</h1>


@stop

@section('content')
<div class="container">
    <p>Editar profesor</p>

    <form action= "{{route('actualizar_profesor', $profesor->codprofesor)}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codprofesor" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codprofesor" id="codprofesor" value='{{$profesor->codprofesor}}'>
        </div>
        <div class="mb-3">
            <label for="nomprofesor" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomprofesor" name="nomprofesor" value='{{$profesor->nomprofesor}}'>
        </div>
        <div class="mb-3">
            <label for="catprofesor" class="form-label">Categoria:</label>
            <input type="text" class="form-control" name="catprofesor" id="catprofesor" value='{{$profesor->catprofesor}}'>
        </div>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
