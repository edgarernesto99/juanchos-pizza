<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
</head>
<body>
    <h1>AÑADIR PERSONA</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

        @if(isset($persona))
            <form action="{{ route('personas.update', [$persona]) }}" method="POST">
            @method('patch')
        @else
            <form action="{{ route('personas.store') }}" method="POST" >
        @endif
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $persona->nombre ?? '' }}"><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" id="apellidos" value="{{ old('apellidos') ?? $persona->apellidos ?? '' }}"><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" value="{{ old('correo') ?? $persona->correo ?? '' }}"><br>

        <label for="telefono">Telefono:</label><br>
        <input type="tel" name="telefono" id="telefono" value="{{ old('telefono') ?? $persona->telefono ?? '' }}"><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>
