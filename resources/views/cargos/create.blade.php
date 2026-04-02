<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 font-bold text-center">
            {{isset($cargo) ? 'Editar Cargo' : 'Datos del Cargo' }}
        </h2>
    </x-slot>

    <div class="p-6">
        <form   action="{{isset($cargo) ? route('cargos.update', $cargo): route('cargos.store');}}" 
                method="post">
            @csrf
            @isset($cargo)
                @method('PUT')
            @endisset
        <table>
            <thead class="text-green-800 font-bold">
                <th>Nombre</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input  type="text" name="nombre" id="nombre" class="rounded border" 
                                value="{{old('nombre', $cargo->nombre ?? '')}}"></td>
                    <td>
                        <select name="estado" id="estado">
                            @foreach ($estados as $estado)
                                <option value="{{$estado->value?? ''}}" 
                                    {{(isset($cargo) && $estado->value == $cargo->estado->value) ? 'SELECTED' : ''}}>
                                        {{$estado->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        @empty($noMostrarBoton)
        <div class="py-3">
            <input  type="submit" value="Guardar" onclick="return confirm('Desea guardar los cambios?')" 
                    class="rounded py-2 px-2 bg-green-600 font-bold text-white">
        </div>
        @endempty
        </form>
    </div>
</x-app-layout>