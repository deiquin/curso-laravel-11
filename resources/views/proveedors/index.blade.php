

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-green-800 text-center">
            Listado de Proveedores
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="pt-3 pb-5 px-3">
            <a  href="{{ route('proveedors.create') }}" 
                class="rounded-full border border-green-500 bg-green-500 px-4 py-2 text-base 
                        font-bold text-white transition-colors hover:bg-white
                        hover:text-green-800">
                Nuevo proveedor
            </a>
        </div>
        <div class="overflow-hidden rounded-3xl">
            <table class="w-full">
                <thead class="border bg-gray-50 text-green-800 text-center font-extrabold">
                    <tr class=" *:py-2">
                        <th>Num</th>
                        <th>Proveedor</th>
                        <th>Email</th>
                        <th>Razón Social</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @php $contador = 0 @endphp
                @foreach ($proveedors as $proveedor)
                <tr class="border bg-white hover:bg-gray-50" id="fila-{{$proveedor->id}}">
                    <td class="text-right">{{++$contador}}</td>
                    <td class="px-2">
                        {{ $proveedor->nombre }}
                    </td>
                    <td>
                        {{ $proveedor->email }}
                    </td>
                    <td>
                        {{ $proveedor->razon_social }} 
                    </td>
                    <td class="text-center">
                        {{ $proveedor->estado->name }} 
                    </td>
                    <td>
                        <a  href="{{ route('proveedors.show', $proveedor) }}" 
                            class="rounded-full border border-green-500 bg-green-500 px-4 py-1 text-base 
                                    font-bold text-white transition-colors hover:bg-white
                                    hover:text-green-500">Mostrar</a>
                    </td>
                    <td>
                        <a href="{{ route('proveedors.edit', $proveedor) }}" 
                            class="rounded-full border border-green-800 bg-white px-4 py-1 text-base 
                                    font-bold text-green-800 transition-colors hover:bg-green-800 
                                    hover:text-white">Editar</a>
                    </td>
                    <td>
                        <input  type="button" onclick="eliminarProveedor('{{$proveedor->id}}')" 
                                class="rounded-full border border-red-400 bg-white px-3 py-1 text-base 
                                    font-semibold text-red-400 transition-colors hover:bg-red-400 
                                    hover:text-white" value="Eliminar">
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-green-800">
            {{ $proveedors->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>