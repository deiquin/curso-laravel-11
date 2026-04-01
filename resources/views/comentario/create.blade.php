<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../comentario" method="POST">
        @csrf
        <input type="text" name="descripcion" id="descripcion"><br>
        <input type="submit" value="Grabar">
    </form>
</body>
</html>