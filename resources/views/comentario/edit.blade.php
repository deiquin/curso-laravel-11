<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../{{$oComentario->id}}" method="POST">
        @csrf 
        @method('PUT')
        Descripcion: <input type="text" name="descripcion" id="descripcion" value="{{$oComentario->descripcion}}"><br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>