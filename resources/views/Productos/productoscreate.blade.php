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

    <form action="/productos" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" require><br>

        <label for="descripcion">Descripcion:</label><br>
        <input type="text" name="descripcion" id="descripcion"><br>

        <label for="precio">Precio:</label><br>
        <input type="number" name="precio" id="precio" min="0"><br>

        <label for="tipo">Tipo:</label><br>
        <select name="tipo" id="tipo">
            <option value="pizza">pizza</option default>
            <option value="complemento">Complemento</option>
        </select><br>

        <label for="tamanio">Tamaño:</label><br>
        <input type="text" name="tamanio" id="nombre"><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>