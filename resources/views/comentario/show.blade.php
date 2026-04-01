<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Descripcion: {{$oComentario->descripcion}} <br>

    <a href="{{$oComentario->id}}/edit">Editar</a>
    <!--<form action="../comentario/{{$oComentario->id}}" method="post">-->
    <form action="{{route(/vendedor.index)}}" method="post"></form>
        @csrf
        @method('DELETE')        
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>