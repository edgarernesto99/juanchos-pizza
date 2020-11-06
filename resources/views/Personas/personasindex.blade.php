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
    <a href="personas/create">Añadir Persona</a>

    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            

        </tr>
        @foreach ($personas as $persona)
            <tr>
                <td><a href="{{route('personas.show',[$persona->id])}}">{{$persona->id}}</a></td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellidos}}</td>
                <td>{{$persona->correo}}</td>
                <td>{{$persona->telefono}}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>