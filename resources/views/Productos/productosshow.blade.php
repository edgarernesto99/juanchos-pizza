<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('productos.edit',[$producto->id])}}">Editar Producto</a><br>
    <a href="{{route('productos.index')}}">Listado de Producto</a><br>
    <form action="{{ route('productos.destroy', [$producto]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>TIPO</th>
            <th>TAMAÑO</th>
        </tr>
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->tipo}}</td>
            <td>{{$producto->tamanio}}</td>
        </tr>
    </table>
</body>
</html>