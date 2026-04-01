<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../chofer/{{$aChofer->id}}" method="POST">
        @csrf
        @method('PUT')
        Nombre: <input type="text" name="nombre" id="nombre" value="{{$aChofer->nombre}}"> <br>
        Apellido Paterno: <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{$aChofer->apellido_paterno}}"><br>
        Apellido Materno: <input type="text" name="apellido_materno" id="apellido_materno" value="{{$aChofer->apellido_materno}}"><br>
        
        <input type="submit" value="Modificar">
    </form>


</body>
</html>