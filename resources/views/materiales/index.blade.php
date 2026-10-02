<x-app-layout>
    <x-slot name='header'>
        <h2 class="text-xl font-bold text-green-800 text-center">
            Listado de Materiales
        </h2>
    </x-slot>


    <div class="p-6">
        <div class="pt-3 pb-5 px-3">
            <a  href="{{route('materials.create')}}" 
                class="rounded-full border border-green-500 bg-green-500 px-4 py-2 text-base 
                        font-bold text-white transition-colors hover:bg-white
                        hover:text-green-800">Nuevo Material</a>
        </div>
        <div class="overflow-hidden rounded-3xl">
            <table class="w-full">
                <thead class="border bg-gray-50 text-green-800 text-center font-extrabold">
                    <tr class=" *:py-2">
                        <th>Num</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Fecha de Ingreso</th>
                        <th>Fecha de Caducidad</th>
                        <th>Estado</th>
                        <th>Nombre Proveedor</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $contador = 0 @endphp
                    @foreach ($materiales as $material)
                    <tr class="border" id="fila--{{$material->id}}">
                        <td class="text-right">{{++$contador}}</td>
                        <td class="px-2">{{$material->nombre}}</td>
                        <td>{{$material->cantidad}}</td>
                        <td>{{$material->fecha_ingreso}}</td>
                        <td>{{$material->fecha_caducidad}}</td>
                        <td class="text-center">{{$material->estado}}</td>
                        <td>{{$material->nombreProveedor}}</td>
                        <td>
                            <a  href="{{route('materials.show', $material)}}"
                                class="rounded-full border border-green-500 bg-green-500 px-4 py-1 text-base 
                                    font-bold text-white transition-colors hover:bg-white
                                    hover:text-green-500">Mostrar</a>
                        </td>
                        <td>
                            <a  href="{{route('materials.edit', $material)}}" 
                                class="rounded-full border border-green-800 bg-white px-4 py-1 text-base 
                                    font-bold text-green-800 transition-colors hover:bg-green-800 
                                    hover:text-white">Editar</a>
                        </td>
                        </td>
                        <td>
                            <input  type="button" value="Eliminar" onclick="eliminarMaterial('{{$material->id}}')" 
                                    class="rounded-full border border-red-400 bg-white px-3 py-1 text-base 
                                    font-semibold text-red-400 transition-colors hover:bg-red-400 
                                    hover:text-white">
                        </td>
                        </td>
                    </tr>
                        

                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{$materiales->links('pagination::tailwind')}}
        </div>
    </div>

</x-app-layout>
