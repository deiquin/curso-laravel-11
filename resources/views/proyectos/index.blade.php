
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 font-bold text-center">
            Listado de Proyectos
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="py-3">
            <a  href="{{route('proyectos.create')}}" 
                class="no-underline bg-green-600 text-white font-bold py-2 px-2 rounded">
                Nuevo Proyecto</a>
        </div>
        <table class="w-full">
            <thead class="border bg-green-800 text-white font-bold">
                <th>Nombre</th>
                <th>Estado</th>
                <th>Fecha Inicial</th>
                <th>Fecha Fin</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                <tr class="border" id="fila-{{ $proyecto->id }}">
                    <td>{{$proyecto->nombre}}</td>
                    <td>{{$proyecto->estado->value}}</td>
                    <td>{{$proyecto->fecha_inicio}}</td>
                    <td>{{$proyecto->fecha_fin}}</td>
                    <td>
                        <a  href="{{route('proyectos.show', $proyecto)}}" 
                            class="rounded no-underline text-white py-1 px-2 bg-green-500">
                            Mostrar</a>
                    </td>
                    <td>
                        <a  href="{{route('proyectos.edit', $proyecto)}}" 
                            class="text-green-800 font-bold">Editar</a>
                    </td>
                    <td>
                        <input  type="submit" onclick="eliminarProyecto('{{$proyecto->id}}')" 
                                value="Eliminar" class="rounded bg-red-400 text-white py-1 px-2">
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        {{$proyectos->links('pagination::tailwind')}}
    </div>
</x-app-layout>