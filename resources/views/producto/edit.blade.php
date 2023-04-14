@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR PRODUCTO</h1>
@stop

@section('content')
<form action="{{ route('producto.store','$producto->id')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto-> nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" value="{{$producto-> precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{$producto->categoria}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock</label>
        <input id="stock" name="stock" type="text" class="form-control" value="{{$producto->stock}}">
    </div>
    <div class="mb-3">
        <a href="{{route('producto.index')}}" class="btn btn secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn primary" tabindex="6">Guardar</button>
    </div>

    </form>
    
@stop



