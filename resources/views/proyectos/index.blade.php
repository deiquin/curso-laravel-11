
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 font-bold text-center">
            Listado de Proyectos
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="pt-3 pb-5 px-3">
            <a  href="{{route('proyectos.create')}}" 
                class="rounded-full border border-green-500 bg-green-500 px-4 py-2 text-base 
                        font-bold text-white transition-colors hover:bg-white
                        hover:text-green-800">
                Nuevo Proyecto</a>
        </div>
        <div class="overflow-hidden rounded-3xl">
            <table class="w-full">
                <thead class="border bg-gray-50 text-green-800 text-center font-extrabold">
                    <tr class=" *:py-2">
                        <th>Num</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Fecha Inicial</th>
                        <th>Fecha Fin</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $contador = 0 @endphp
                    @foreach ($proyectos as $proyecto)
                    <tr class="border bg-white hover:bg-gray-50" id="fila-{{ $proyecto->id }}">
                        <td class="text-right">{{++$contador}}</td>
                        <td class="px-2">{{$proyecto->nombre}}</td>
                        <td class="text-center">{{$proyecto->estado->name}}</td>
                        <td>{{$proyecto->fecha_inicio}}</td>
                        <td>{{$proyecto->fecha_fin}}</td>
                        <td>
                            <a  href="{{route('proyectos.show', $proyecto)}}" 
                                class="rounded-full border border-green-500 bg-green-500 px-4 py-1 text-base 
                                        font-bold text-white transition-colors hover:bg-white
                                        hover:text-green-500">
                                Mostrar</a>
                        </td>
                        <td>
                            <a  href="{{route('proyectos.edit', $proyecto)}}" 
                                class="rounded-full border border-green-800 bg-white px-4 py-1 text-base 
                                        font-bold text-green-800 transition-colors hover:bg-green-800 
                                        hover:text-white">Editar</a>
                        </td>
                        <td>
                            <input  type="submit" onclick="eliminarProyecto('{{$proyecto->id}}')" 
                                    value="Eliminar" class="rounded-full border border-red-400 bg-white px-3 py-1 text-base 
                                        font-semibold text-red-400 transition-colors hover:bg-red-400 
                                        hover:text-white">
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
        </table>
        </div>
        {{$proyectos->links('pagination::tailwind')}}
    </div>
</x-app-layout>