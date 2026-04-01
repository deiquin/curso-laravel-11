

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-green-800 text-center">
            Listado de Proveedores
        </h2>
    </x-slot>

    <div class="p-4">
        <div class="py-3">
            <a  href="{{ route('proveedors.create') }}" 
                class="no-underline bg-green-600 text-white font-bold py-2 px-2 rounded">
                Nuevo proveedor
            </a>
        </div>
        
        <table class="w-full">
            <thead class="bg-green-800 text-white font-bold border text-center">
                <th>Proveedor</th>
                <th>Email</th>
                <th>Razón Social</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>

            <tbody>
            @foreach ($proveedors as $proveedor)
            <tr id="fila-{{$proveedor->id}}">
                <td>
                    {{ $proveedor->nombre }}
                </td>
                <td>
                    {{ $proveedor->email }}
                </td>
                <td>
                    {{ $proveedor->razon_social }} 
                </td>
                <td>
                    <a  href="{{ route('proveedors.show', $proveedor) }}" 
                        class="rounded bg-green-500 py-1 px-2 text-white no-underline">Mostrar</a>
                </td>
                <td>
                    <a href="{{ route('proveedors.edit', $proveedor) }}" class="text-green-800 font-bold">Editar</a>
                </td>
                <td>
                    <input  type="button" onclick="eliminarProveedor('{{$proveedor->id}}')" 
                            class="bg-red-400 text-white rounded py-1 px-2" value="Eliminar">
                </td>
            </tr>
            
            @endforeach
            </tbody>

        </table>
        <div class="text-green-800">
            {{ $proveedors->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>