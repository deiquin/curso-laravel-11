<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hola {{ $nombre }} tu edad es: {{ $edad }}

    @if($edad > 10)
        <h1>puede acceder al portal</h1>
    @else
        <h1>No puede acceder al portal, no cumple los requisitos</h1>
    @endif
</body>
</html>