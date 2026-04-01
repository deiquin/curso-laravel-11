<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="../../categoria/{{$oCategoria->id}}" method="post">-->
    <form action="{{route('categoria.update', $oCategoria->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" id="nombre" value="{{$oCategoria->nombre}}">
        <input type="text" name="slug" id="slug" value="{{$oCategoria->slug}}">
        <input type="submit" value="Modificar">
    </form>
</body>
</html>