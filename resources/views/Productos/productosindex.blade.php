<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="productos/create">Crear Producto</a>

    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>TIPO</th>
            <th>TAMAÑO</th>
            <th>IMAGEN</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td><a href="{{route('productos.show',[$producto->id])}}">{{$producto->id}}</a></td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->tipo}}</td>
                <td>{{$producto->tamanio}}</td>
                <td><img width="100px" src="{{Storage::url($producto->imagen)}}" alt=" "></td>
            </tr>
        @endforeach
    </table>
</body>
</html>