<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Editar vendedor</h3>
    <form action="{{route('vendedor.update', $vendedor)}}" method="post">
        @csrf
        @method('PUT')
        nombre: <input type="text" name="nombre" id="nombre" value="{{$vendedor->nombre}}"><br>
        apellido_paterno: <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{$vendedor->apellido_paterno}}"><br>
        apellido_materno: <input type="text" name="apellido_materno" id="apellido_materno" value="{{$vendedor->apellido_materno}}"><br>
        email: <input type="text" name="email" id="email" value="{{$vendedor->email}}"><br>
        edad: <input type="text" name="edad" id="edad" value="{{$vendedor->edad}}"><br>

        <input type="submit" value="Modificar">
    </form>


</body>
</html>
