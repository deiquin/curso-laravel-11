<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="../categoria" method="post">-->
    <form action="{{route('categoria.store')}}" method="post">
        @csrf
        nombre: <input type="text" name="nombre" id="nombre"><br>
        Slug:<input type="text" name="slug" id="slug">
        <input type="submit" value="Grabar">
    </form>
</body>
</html>