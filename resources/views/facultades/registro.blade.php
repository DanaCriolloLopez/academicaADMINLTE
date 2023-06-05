@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Facultades</h1>


@stop

@section('content')
    <p>Registro de facultades</p>

    <form>
        <div class="mb-3">
            <label for="txt_codigo" class="form-label">Código:</label>
            <input type="number" class="form-control" id="txt_codigo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="txt_nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="txt_nombre">
        </div>
        <button type="submit" class="btn btn-dark">Registrar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
