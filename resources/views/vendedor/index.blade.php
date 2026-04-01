<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('vendedor.create')}}">Nuevo</a><br><br><br>
    <table>
        <thead>
            <tr>
                <th>num</th>
                <th>nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aVendedor as $vendedor)
            <tr>
                <td>{{$vendedor->id}}</td>
                <td>
                    <a href="{{route('vendedor.show', $vendedor)}}">{{$vendedor->nombre}}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{$aVendedor->links()}}
</body>
</html>