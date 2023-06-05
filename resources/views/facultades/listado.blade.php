@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
    <p>Listado de Facultades</p>

    <a class="btn btn-success" href="/facultades/registrar">Adicionar</a>
    <br>
    <table  class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
            $contador=1;
            @endphp
            @foreach($facultades as $f)
            <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$f->codfacultad}}</td>
            <td>{{$f->nomfacultad}}</td>
            <td>Otto</td>
            <td>
            <a class="btn btn-info">Editar</a>
            <a class="btn btn-danger">Eliminar</a>
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
