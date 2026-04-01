<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<a href="categoria/create">Nuevo</a><br><br><br>-->
    <a href="{{route('categoria.create')}}">Nuevo</a><br><br><br>
    <?php if(isset($aCategoria)) { ?>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                </tr>
            </thead>

            <tbody>
                @foreach($aCategoria as $categoria)
                <tr>
                    <th>{{$categoria->id}}</th>
                    <td><a href="{{route('categoria.show', $categoria)}}">{{$categoria->nombre}}</a></td>
                </tr>
                @endforeach
            </tbody>
    <?php } ?>
        </table>
    <br>
    {{$aCategoria->links()}}
</body>
</html>