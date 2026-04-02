<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 text-center">
            <strong>Listado de Trabajadores</strong>
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="py-3">
            <a  class="no-underline py-2 px-2 bg-green-600 text-white rounded" 
                href="{{route('trabajadors.create')}}" >
                <strong>Nuevo Trabajador</strong></a>
        
        </div>
        <table class="min-w-full py-4">
            <thead class="border bg-green-800 text-white text-center py-4">
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
            </thead>
            <tbody>
            @foreach ($trabajadores as $trabajador)
            <tr class="border" id= 'fila-{{$trabajador->id}}'>
                <td>{{$trabajador->nombre}}</td>
                <td>{{$trabajador->edad}}</td>
                <td>{{$trabajador->nombreCargo}}</td>
                <td>{{$trabajador->nombreProyecto}}</td>
                <td>{{$trabajador->acciones}}</td>
                <td>{{ucfirst($trabajador->estado->value)}}</td>
                <td>
                    <a  href="{{route('trabajadors.show', $trabajador)}}" 
                        class="no-underline px-2 py-2 text-white rounded border bg-green-500">
                        Mostrar</a>
                    </td>
                <td><a  href="{{route('trabajadors.edit', $trabajador)}}" 
                        class="text-green-800"><strong>Editar</strong></a>
                </td>
                <td>
                    <input  type="button" class="bg-red-400 py-1 px-2 text-white rounded" 
                            onclick="eliminarTrabajador('{{$trabajador->id}}')" value="Eliminar">
                </td>
            </tr>
            
            @endforeach
            
            </tbody>
        </table>
        {{$trabajadores->links('pagination::tailwind')}}
    </div>
</x-app-layout>
