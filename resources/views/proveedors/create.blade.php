

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
                <th>Estado</th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-red-500 font-bold">@error('nombre') <div>{{ $message }}</div> @enderror</td>
                    <td class="text-red-500 font-bold">@error('razon_social') <div>{{ $message }}</div> @enderror</td>
                    <td class="text-red-500 font-bold">@error('edad') <div>{{ $message }}</div> @enderror</td>
                    <td class="text-red-500 font-bold">@error('email') <div>{{ $message }}</div> @enderror</td>
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
                    <td>
                        <select name="estado" id="estado">
                            @foreach($estados as $estado)
                            <option value="{{$estado->value}}" 
                                    {{old('estado', $proveedor->estado->value?? '') == $estado->value ? 'SELECTED' : ''}}>
                                {{$estado->name}}
                            </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
   
        @empty($noMostrarBoton)
        <div class="py-3">
            <button type="submit" class="rounded bg-green-600 text-white py-2 px-8 font-bold">Guardar</button>
        </div>
        @endempty
    </form>
    </div>
</x-app-layout>