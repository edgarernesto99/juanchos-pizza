<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
    <a href="{{route('personas.edit',[$persona->id])}}">Editar Persona</a><br>
    <a href="{{route('personas.index')}}">Listado de Personas</a><br>
    <form action="{{ route('personas.destroy', [$persona]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>CORREO</th>
            <th>TELEFONO</th>

        </tr>
        <tr>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellidos}}</td>
            <td>{{$persona->correo}}</td>
            <td>{{$persona->telefono}}</td>

        </tr>
    </table>
</body>
</html>