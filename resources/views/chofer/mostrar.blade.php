<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <strong>Nombre: </strong> {{$aChofer->nombre}} <br>
    <strong>Apellido Paterno: </strong>  {{$aChofer->apellido_paterno}} <br>
    <strong>Apellido Materno: </strong>  {{$aChofer->apellido_materno}} <br><br>
    <a href="{{$aChofer->id}}/editar">Editar</a>
    <form action="{{$aChofer->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>