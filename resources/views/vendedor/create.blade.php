<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="../vendedor" method="POST">-->
    <form action="{{route('vendedor.store')}}" method="POST">
        @csrf

        nombre: <input type="text" name="nombre" id="nombre"><br>
        apellido_paterno: <input type="text" name="apellido_paterno" id="apellido_paterno"><br>
        apellido_materno: <input type="text" name="apellido_materno" id="apellido_materno"><br>
        email: <input type="text" name="email" id="email"><br>
        edad: <input type="text" name="edad" id="edad"><br>
        <input type="submit" value="Grabar">
    </form>
</body>
</html>