@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>

    <a class="btn btn-secondary" href="/estudiantes/registro" >Adicionar</a>
    <br>
    <table  class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha</th>
            <th scope="col">Sexo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Barrio</th>
            <th scope="col">Programa</th>
            </tr>
        </thead>
        <tbody>
            @php
            $contador=1;
            @endphp
            @foreach($estudiantes as $e)
            <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$e->codestudiante}}</td>
            <td>{{$e->nomestudiante}}</td>
            <td>{{$e->edaestudiante}}</td>
            <td>{{$e->fechestudiante}}</td>
            <td>{{$e->sexestudiante}}</td>
            <td>{{$e->ciudad}}</td>
            <td>{{$e->barrio}}</td>
            <td>{{$e->programa}}</td>
            <td>
            <a class="btn btn-info" href="{{route('editarEst',$e->codestudiante)}}" >Editar</a>
            <a class="btn btn-danger" href="{{route('eliminaEst',$e->codestudiante)}}">Eliminar</a>
            </td>
            </tr>
            @php
            $contador++;
            @endphp
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
