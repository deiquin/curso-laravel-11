<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    nombre: {{$oCategoria->nombre}} <br>
    slug: {{$oCategoria->slug}} <br>
    <!--<a href="../categoria/{{$oCategoria->id}}/edit">Editar</a>-->
    <a href="{{route('categoria.edit', $oCategoria)}}">Editar</a>

    <!--<form action="../categoria/{{$oCategoria->id}}" method="post">-->
    <form action="{{route('categoria.destroy', $oCategoria)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>