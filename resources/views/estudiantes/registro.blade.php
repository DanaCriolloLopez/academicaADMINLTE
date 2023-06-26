@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1>


@stop

@section('content')
    <div class="container">
    <p>Registro de Estudiantes</p>

    <form action= "{{url('estudiantes/registro')}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codestudiante" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codestudiante" id="codestudiante" placeholder="Ingrese el código">
        </div>
        <div class="mb-3">
            <label for="nomestudiante" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomestudiante" name="nomestudiante" placeholder="Ingrese el nombre">
        </div>
        <div class="mb-3">
            <label for="edaestudiante" class="form-label">Edad:</label>
            <input type="number" class="form-control" name="edaestudiante" id="edaestudiante" placeholder="Ingrese edad">
        </div>
        <div class="mb-3">
            <label for="fechestudiante" class="form-label">Fecha:</label>
            <input type="date" class="form-control" name="fechestudiante" id="fechestudiante">
        </div>
        <div class="mb-3">
            <label for="sexestudiante" class="form-label">Sexo:</label>
            <input type="text" class="form-control" id="sexestudiante" name="sexestudiante" placeholder="Ingrese el sexo">
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="number" class="form-control" name="ciudad" id="ciudad" placeholder="Ingrese ciudad">
        </div>
        <div class="mb-3">
            <label for="barrio" class="form-label">Barrio:</label>
            <input type="number" class="form-control" name="barrio" id="barrio" placeholder="Ingrese barrio">
        </div>
        <div class="mb-3">
            <label for="programa" class="form-label">Programa:</label>
            <input type="number" class="form-control" name="programa" id="programa" placeholder="Ingrese programa">
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
