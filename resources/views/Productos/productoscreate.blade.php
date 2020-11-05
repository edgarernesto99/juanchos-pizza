<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AÑADIR PRODUCTO</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

        @if(isset($producto))
            <form action="{{ route('productos.update', [$producto]) }}" method="POST">
            @method('patch')
        @else
            <form action="{{ route('productos.store') }}" method="POST">
        @endif
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $producto->nombre ?? '' }}"><br>

        <label for="descripcion">Descripcion:</label><br>
        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $producto->descripcion ?? '' }}"><br>

        <label for="precio">Precio:</label><br>
        <input type="number" name="precio" id="precio" min="0" value="{{ old('precio') ?? $producto->precio ?? '0.00' }}" step="0.01"><br>

        <label for="tipo">Tipo:</label><br>
        <select name="tipo" id="tipo" value="Pizza">
            @if ((old('tipo') ?? $producto->tipo ?? ' ') == 'Complemento')
                <option value="Pizza">Pizza</option>
                <option value="Complemento" selected="{{ (old('tipo') ?? $producto->tipo ?? '0.00') == 'Complemento' }}">Complemento</option>
            @else
                <option value="Pizza" selected>Pizza</option>
                <option value="Complemento">Complemento</option>
            @endif
        </select><br>

        <label for="tamanio">Tamaño:</label><br>
        <input type="text" name="tamanio" id="nombre"><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>