@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Estudiantes</h1>


@stop

@section('content')
<div class="container">
    <p>Editar estudiantes</p>

    <form action= "{{route('actualizar_estudiante', $estudiante->codestudiante)}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codestudiante" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codestudiante" id="codestudiante" value='{{$estudiante->codestudiante}}'>
        </div>
        <div class="mb-3">
            <label for="nomestudiante" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomestudiante" name="nomestudiante" value='{{$estudiante->nomestudiante}}'>
        </div>
        <div class="mb-3">
            <label for="edaestudiante" class="form-label">Edad:</label>
            <input type="number" class="form-control" name="edaestudiante" id="edaestudiante" value='{{$estudiante->edaestudiante}}'>
        </div>
        <div class="mb-3">
            <label for="fechestudiante" class="form-label">Fecha:</label>
            <input type="date" class="form-control" name="fechestudiante" id="fechestudiante" value='{{$estudiante->fechestudiante}}'>
        </div>
        <div class="mb-3">
            <label for="sexestudiante" class="form-label">Sexo:</label>
            <input type="text" class="form-control" id="sexestudiante" name="sexestudiante" value='{{$estudiante->sexestudiante}}'>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="number" class="form-control" name="ciudad" id="ciudad" value='{{$estudiante->ciudad}}'>
        </div>
        <div class="mb-3">
            <label for="barrio" class="form-label">Barrio:</label>
            <input type="number" class="form-control" name="barrio" id="barrio" value='{{$estudiante->barrio}}'>
        </div>
        <div class="mb-3">
            <label for="programa" class="form-label">Programa:</label>
            <input type="number" class="form-control" name="programa" id="programa" value='{{$estudiante->programa}}'>
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
