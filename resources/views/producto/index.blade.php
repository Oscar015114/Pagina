@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>VISTA DE MOSTRAR TODOS LOS REGISTROS - PRODUCTOS</h1>
@stop

@section('content')
    <a href="{{route ("producto.create")}}" class="btn btn primary">CREAR</a>
    <table class="table table-bordered table-striped dt-responsive tablas" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                        <a href="/productos/{{$producto->id}}/edit"  class="btn btn info" type="button" >Editar</a>
                        <button class="btn btn danger">Eliminar</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@stop

