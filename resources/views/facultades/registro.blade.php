@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Facultades</h1>


@stop

@section('content')
    <div class="container">
    <p>Registro de facultades</p>

    <form action= "{{url('facultades/registrar')}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codfacultad" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codfacultad" id="codfacultad" placeholder="Ingrese el código">
        </div>
        <div class="mb-3">
            <label for="nomfacultad" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomfacultad" name="nomfacultad" placeholder="Ingrese el nombre">
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
