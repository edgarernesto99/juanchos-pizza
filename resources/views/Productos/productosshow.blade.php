@extends('Layouts.Productos')
@section('menu-productos')
<a href="{{route('productos.edit',[$producto->id])}}">Editar Producto</a><br>
<a href="{{route('productos.index')}}">Listado de Producto</a><br>
<form action="{{ route('productos.destroy', [$producto]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Eliminar</button>
</form>
<div class="col-md-6">
    <div class="imagen-producto">
        {{$producto->id}}
        {{$producto->nombre}}
        {{$producto->descripcion}}
        {{$producto->precio}}
        {{$producto->tipo}}
        {{$producto->tamanio}}
        <img width="100px" src="{{Storage::url($producto->imagen)}}" alt=" ">
    </div>
</div>
@endsection
