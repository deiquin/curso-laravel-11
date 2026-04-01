<x-app-layout>
    <x-slot name='header'>
        <h2>
            Listado de Materiales
        </h2>
    </x-slot>


    <div class="p-6">
        <div">
            <a  href="{{route('materials.create')}}" 
                class="rounded bg-green-600 text-white font-bold py-2 px-2">Nuevo Material</a>
        </div>
        <table class="w-full">
            <thead class="bg-green-800 text-white font-bold">
                <th>Nombre</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($materiales as $material)
                <tr class="border" id="fila--{{$material->id}}">
                    <td>{{$material->nombre}}</td>
                    <td>
                        <a  href="{{route('materials.show', $material)}}"
                            class="bg-green-400 rounded py-1 px-2 text-white">Mostrar</a>
                    </td>
                    <td>
                        <a  href="{{route('materials.edit', $material)}}" 
                            class="text-green-800 rounded py-1 px-2 font-bold">Editar</a>
                    </td>
                    </td>
                    <td>
                        <input  type="button" value="Eliminar" onclick="eliminarMaterial('{{$material->id}}')" 
                                class="bg-red-400 text-white py-1 px-2 rounded">
                    </td>
                    </td>
                </tr>
                    

                @endforeach
            </tbody>
        </table>
        <div>
            {{$materiales->links('pagination::tailwind')}}
        </div>
    </div>

</x-app-layout>
