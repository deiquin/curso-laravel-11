<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 text-center">
            <strong>Listado de Trabajadores</strong>
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="pt-3 pb-5 px-3">
            <a  class="rounded-full border border-green-500 bg-green-500 px-4 py-2 text-base 
                        font-bold text-white transition-colors hover:bg-white
                        hover:text-green-800" 
                href="{{route('trabajadors.create')}}" >
                <strong>Nuevo Trabajador</strong></a>
        
        </div>
        <div class="overflow-hidden rounded-3xl">
            <table class="min-w-full py-4">
                <thead class="border bg-gray-50 text-green-800 text-center font-extrabold">
                    <tr class=" *:py-2">
                        <th>Num</th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Edad
                        </th>
                        <th>
                            Cargo
                        </th>
                        <th>
                            Proyecto
                        </th>
                        <th>
                            Acciones
                        </th>
                        <th>
                            Estado
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @php $contador = 0 @endphp
                @foreach ($trabajadores as $trabajador)
                <tr class="border bg-white hover:bg-gray-50" id= 'fila-{{$trabajador->id}}'>
                    <td class="text-right">{{++$contador}}</td>
                    <td class="px-2">{{$trabajador->nombre}}</td>
                    <td>{{$trabajador->edad}}</td>
                    <td>{{$trabajador->nombreCargo}}</td>
                    <td>{{$trabajador->nombreProyecto}}</td>
                    <td>{{$trabajador->acciones}}</td>
                    <td class="text-center">{{ucfirst($trabajador->estado->name)}}</td>
                    <td><a  href="{{route('trabajadors.show', $trabajador)}}" 
                            class="rounded-full border border-green-500 bg-green-500 px-4 py-1 text-base 
                                    font-bold text-white transition-colors hover:bg-white
                                    hover:text-green-500">
                            Mostrar</a>
                    </td>
                    <td><a  href="{{route('trabajadors.edit', $trabajador)}}" 
                            class="rounded-full border border-green-800 bg-white px-4 py-1 text-base 
                                    font-bold text-green-800 transition-colors hover:bg-green-800 
                                    hover:text-white"><strong>Editar</strong></a>
                    </td>
                    <td><input  type="button" class="rounded-full border border-red-400 bg-white px-3 py-1 text-base 
                                    font-semibold text-red-400 transition-colors hover:bg-red-400 
                                    hover:text-white" 
                                onclick="eliminarTrabajador('{{$trabajador->id}}')" value="Eliminar">
                    </td>
                </tr>
                
                @endforeach
                
                </tbody>
            </table>
        </div>

        {{$trabajadores->links('pagination::tailwind')}}
    </div>
</x-app-layout>
