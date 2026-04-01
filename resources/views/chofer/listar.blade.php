<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <br>
        <div class="max-w-4xl mx-auto px-4">
            <h1>este es el listado de los choferes</h1>
            <div class="p-4 mb-4 text-sm text-blue-800">
                <span class="font-medium">información de alerta</span>
            </div>
        </div>
        <div class="flex items-center bg-blue-900 px-8 py-5 text-white hover:bg-blue-200"><span>holaaa</span></div>
        <h1 class="text-3xl font-bold underline text-clifford px-8 py-5">
          Hello world!
        </h1>
        <button class="flex items-center bg-blue-900 px-8 py-5 text-white hover:bg-blue-200">presionar</button>

        <x-alert type="danger">
            <x-slot name="titttle">información!</x-slot>
            contenido de alerta
        </x-alert>
    <br>
    <ul>
        @foreach ($aChofer as $indice => $chofer)
        <li><a href="{{$chofer->id}}">indice: {{$chofer->id}}</a></li>
        @endforeach
    </ul>
        {{$aChofer->links()}}
    <?php
/*     foreach($aChofer as $indice => $chofer ) {
        echo $chofer->nombre . "<br>";
    }  */
    ?>
    <a href="crear">Nuevo Chofer</a>
</body>
</html>