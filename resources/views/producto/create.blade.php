@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR REGISTROS - PRODUCTOS</h1>
@stop

@section('content')
    <form action="{{ route('producto.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock</label>
        <input id="stock" name="stock" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <a href="{{route('producto.index')}}" class="btn btn secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn primary" tabindex="6">Guardar</button>
    </div>

    </form>
    
@stop

