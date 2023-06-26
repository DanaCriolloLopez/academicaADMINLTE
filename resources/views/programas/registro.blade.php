@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Programas</h1>


@stop

@section('content')
    <div class="container">
    <p>Registro de programas</p>

    <form action= "{{url('programas/registro')}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codprograma" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codprograma" id="codprograma" placeholder="Ingrese el código">
        </div>
        <div class="mb-3">
            <label for="nomprograma" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomprograma" name="nomprograma" placeholder="Ingrese el nombre">
        </div>
        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad:</label>
            <input type="number" class="form-control" name="facultad" id="facultad" placeholder="Ingrese la facultad">
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
