<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--     hola dessde la vista de chofer crear <br>
 -->
    <form action="crear" method="POST">
        @csrf
        Nombre: <input type="text" name="nombre" id="nombre"> <br>
        Apellido Paterno: <input type="text" name="apellido_paterno" id="apellido_paterno"><br>
        Apellido Materno: <input type="text" name="apellido_materno" id="apellido_materno"><br>
        <input type="submit" value="Guardar">
    </form>

</body>
</html>