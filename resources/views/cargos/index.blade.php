<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 text-center font-bold">
            Listado de Cargos
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="py-3">
            <a  href="{{route('cargos.create')}}" 
                class="rounded text-white font-bold bg-green-600 py-2 px-2 no-underline">Nuevo Cargo</a>
        </div>
        <table class="w-full">
            <thead class="bg-green-800 text-white text-center bold border">
                <th>Nombre</th>
                <th>Estado</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($cargos as $cargo)
                <tr class="border" id="fila--{{$cargo->id}}">
                    <td>{{$cargo->nombre}}</td>
                    <td>{{$cargo->estado}}</td>
                    <td>
                        <a  href="{{route('cargos.show', $cargo)}}" 
                            class="no-underline text-white bg-green-500 py-1 px-2 rounded">
                            Mostrar</a>
                    </td>
                    <td>
                        <a  href="{{route('cargos.edit', $cargo)}}" 
                            class="text-green-800 font-bold">Editar</a>
                    </td>
                    <td>
                        <input type="button" class="bg-red-400 rounded py-1 px-2 text-white" onclick="eliminarCargo('{{$cargo->id}}')" value="Eliminar">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$cargos->links('pagination::tailwind');}}
    </div>
</x-app-layout>

