@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>

     
    <a class="btn btn-success" href="/profesores/registro" >Adicionar</a>
    <br>
    <table  class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @php
            $contador=1;
            @endphp
            @foreach($profesores as $p)
            <tr>
            <th scope="row">{{$contador}}</th>
            <td>{{$p->codprofesor}}</td>
            <td>{{$p->nomprofesor}}</td>
            <td>{{$p->catprofesor}}</td>
            <td>
            <a class="btn btn-info"  href="{{route('editarProfe',$p->codprofesor)}}">Editar</a>
            <a class="btn btn-danger" href="{{route('eliminaProfe',$p->codprofesor)}}">Eliminar</a>
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
