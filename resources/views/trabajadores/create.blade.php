<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 text-center">
            <strong>
                {{isset($trabajador) ? 'Editar Trabajador' : 'Datos del Trabajador'}}
            </strong>
        </h2>
    </x-slot>

    <div class="p-6">
        <form   action="{{isset($trabajador) ? route('trabajadors.update', $trabajador) : route('trabajadors.store')}}" 
                method="post">

            @csrf
            @isset($trabajador)
                @method('PUT')
            @endisset
            <table>
                <thead class="text-green-800">
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                    <th>Estado</th>
                    <th>Cargo</th>
                    <th>Proyecto</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @error('nombre')
                                <span style='color:red'><bold>{{ $message }}</bold></span>
                            @enderror
                        </td>
                        <td>
                            @error('edad')
                                <span style='color:red'><bold>{{ $message }}</bold></span>
                            @enderror
                        </td>
                        <td>
                             @error('acciones')
                                <span style='color:red'><bold>{{ $message }}</bold></span>
                            @enderror
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="nombre" id="nombre" class="rounded border" 
                            value="{{old('nombre', $trabajador->nombre?? '')}}">
                        </td>
                        <td>
                            <input type="text" name="edad" id="edad" class="rounded border" 
                            value="{{old('edad', $trabajador->edad?? '')}}"></td>
                        <td>
                            <input type="text" name="acciones" id="acciones" class="rounded border" 
                            value="{{old('acciones' ,$trabajador->acciones?? '')}}">
                        </td>
                        <td>
                            <select name="estado">
                                @foreach (\App\Enums\EstadoTrabajador::cases() as $estado)
                                    <option value="{{ $estado->value }}"
                                        {{ old('estado', $trabajador->estado->value ?? '') == $estado->value ? 'selected' : '' }}>
                                        {{ ucfirst($estado->value) }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="id_cargo" id="id_cargo" class="rounded border">
                                @foreach ($cargos as $cargo)
                                    <option value="{{$cargo->id}}" {{ (isset($trabajador) && $trabajador->id_cargo == $cargo->id) ? 'SELECTED' : ''}}>{{$cargo->nombre}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="id_proyecto" id="id_proyecto" class="border rounded">
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{$proyecto->id}}" {{ (isset($trabajador) && $trabajador->id_proyecto == $proyecto->id) ? 'SELECTED' : ''}}>{{$proyecto->nombre}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            @empty($noMostrarBoton)
            <div class="py-4">
                <input  type="submit" onclick="return confirm('¿Seguro de guardar los datos?')" 
                        value="Guardar" class="rounded text-white bg-green-600 py-2 px-2">
            </div>
            @endempty
        </form>
    </div>
</x-app-layout>