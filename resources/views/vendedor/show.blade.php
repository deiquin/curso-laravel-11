<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Datos del vendedor</h3>
    <strong>nombre: </strong>{{$vendedor->nombre}} <br>
    <strong>apellido_paterno: </strong>{{$vendedor->apellido_paterno}}<br>
    <strong>apellido_materno: </strong>{{$vendedor->apellido_materno}}<br>
    <strong>email: </strong>{{$vendedor->email}}<br>
    <strong>edad: </strong>{{$vendedor->edad}}<br><br>

    <a href="{{route('vendedor.edit', $vendedor)}}">Editar</a>

    <form action="{{route('vendedor.destroy', $vendedor)}}" method="post">
        @csrf
        @method('DELETE')
        
        <input type="submit" value="eliminar">
        
    </form>
    <a href="{{route('vendedor.index')}}">Listado</a>
 
</body>
</html>
