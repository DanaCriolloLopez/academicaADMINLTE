@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Profesores</h1>


@stop

@section('content')
    <div class="container">
    <p>Registro de profesores</p>

    <form action= "{{url('profesores/registro')}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codprofesor" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codprofesor" id="codprofesor" placeholder="Ingrese el código">
        </div>
        <div class="mb-3">
            <label for="nomprofesor" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomprofesor" name="nomprofesor" placeholder="Ingrese el nombre">
        </div>
        <div class="mb-3">
            <label for="catprofesor" class="form-label">Categoria:</label>
            <input type="text" class="form-control" name="catprofesor" id="catprofesor" placeholder="Ingrese la categoria">
        </div>
        <button type="submit" class="btn btn-dark">Registrar</button>
    </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
