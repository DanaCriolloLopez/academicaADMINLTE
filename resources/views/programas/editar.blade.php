@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Facultades</h1>


@stop

@section('content')
<div class="container">
    <p>Editar programa</p>

    <form action= "{{route('actualizar_programa', $programa->codprograma)}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codprograma" class="form-label">Código:</label>
            <input type="number" class="form-control" name="codprograma" id="codprograma" value='{{$programa->codprograma}}'>
        </div>
        <div class="mb-3">
            <label for="nomprograma" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nomprograma" name="nomprograma" value='{{$programa->nomprograma}}'>
        </div>
        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad:</label>
            <input type="number" class="form-control" name="facultad" id="facultad" value='{{$programa->facultad}}'>
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
