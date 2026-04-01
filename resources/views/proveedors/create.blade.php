

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-green-800 text-center">
            {{isset($proveedor) ? 'Editar Proveedor' : 'Datos del Proveedor'}}
        </h2>
    </x-slot>

    <div class="p-6">
    <form method="POST"
        action="{{ isset($proveedor) ? route('proveedors.update', $proveedor) : route('proveedors.store') }}">
        @csrf
        @isset($proveedor)
            @method('PUT')
        @endisset

        <table>
            <thead class="font-bold text-green-800">
                <th>Nombre</th>
                <th>Razón Social</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Es admin</th>
            </thead>
            <tbody>
                <tr>
                    <td>@error('nombre') <div>{{ $message }}</div> @enderror</td>
                    <td>@error('razon_social') <div>{{ $message }}</div> @enderror</td>
                    <td>@error('edad') <div>{{ $message }}</div> @enderror</td>
                    <td>@error('email') <div>{{ $message }}</div> @enderror</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input  name="nombre" value="{{ old('nombre', $proveedor->nombre ?? '') }}" 
                                placeholder="Nombre" class="rounded border-green-800">
                    </td>
                    <td>
                        <input  name="razon_social" value="{{ old('razon_social', $proveedor->razon_social ?? '') }}" 
                                placeholder="Raz+on Social" class="rounded border-green-800">
                    </td>
                    <td>
                        <input  name="edad" value="{{ old('edad', $proveedor->edad ?? '') }}" 
                                placeholder="Edad" class="rounded border-green-800">
                    </td>
                    <td>
                        <input  name="email" type="email" value="{{ old('email', $proveedor->email ?? '') }}" 
                                placeholder="Email" class="rounded border-green-800">
                    </td>
                    <td class="text-center">
                        <input type="hidden" name="esadmin" value="0">
                        <input  type="checkbox" name="esadmin" class="text-green-600"
                                value="1" @checked(old('esadmin', $proveedor->esadmin ?? false))>
                    </td>
                </tr>
            </tbody>
        </table>
   
        @empty($noMostrarBoton)
        <div class="py-3">
            <button type="submit" class="rounded bg-green-600 text-white py-2 px-2 font-bold">Guardar</button>
        </div>
        @endempty
    </form>
    </div>
</x-app-layout>