@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>Programas</h1>

@stop

@section('content')
    <p>Listado de Programas</p>

    
    <a class="btn btn-success" href="/programas/registro">Adicionar</a>
    <br>
    <table  class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
            </tr>
        </thead>
        <tbody>
            @php
            $contador=1;
            @endphp
            @foreach($programas as $p)
            <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$p->codprograma}}</td>
            <td>{{$p->nomprograma}}</td>
            <td>{{$p->facultad}}</td>
            <td>
            <a class="btn btn-info"  href="{{route('editarPro',$p->codprograma)}}">Editar</a>
            <a class="btn btn-danger" href="{{route('eliminaPro',$p->codprograma)}}">Eliminar</a>
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
