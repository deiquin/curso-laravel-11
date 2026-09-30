<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 text-center font-bold">
            Listado de Cargos
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="py-3">
            <a  href="{{route('cargos.create')}}" 
                class="rounded-full border border-green-500 bg-green-500 px-4 py-2 text-base 
                        font-bold text-white transition-colors hover:bg-white
                        hover:text-green-800">Nuevo Cargo</a>
        </div>
        <div class="overflow-hidden rounded-3xl">
            <table class="w-full">
                <thead class="border bg-gray-50 text-green-800 text-center font-extrabold">
                    <tr class=" *:py-2">
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cargos as $cargo)
                <tr class="border bg-white hover:bg-gray-50" id="fila--{{$cargo->id}}">
                    <td>{{$cargo->nombre}}</td>
                    <td>{{$cargo->estado->value}}</td>
                    <td>
                        <a  href="{{route('cargos.show', $cargo)}}" 
                            class="rounded-full border border-green-500 bg-green-500 px-4 py-1 text-base 
                                    font-bold text-white transition-colors hover:bg-white
                                    hover:text-green-500">Mostrar</a>
                    </td>
                    <td>
                        <a  href="{{route('cargos.edit', $cargo)}}" 
                            class="rounded-full border border-green-800 bg-white px-4 py-1 text-base 
                                    font-bold text-green-800 transition-colors hover:bg-green-800 
                                    hover:text-white">Editar</a>
                    </td>
                    <td>
                        <input type="button" class="rounded-full border border-red-400 bg-white px-3 py-1 text-base 
                                    font-semibold text-red-400 transition-colors hover:bg-red-400 
                                    hover:text-white" onclick="eliminarCargo('{{$cargo->id}}')" value="Eliminar">
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        </div>
        {{$cargos->links('pagination::tailwind');}}
    </div>
</x-app-layout>

