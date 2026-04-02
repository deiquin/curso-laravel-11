<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 font-bold">
            {{isset($proyecto) ? 'Editar Proyecto' : 'Datos del Proyecto'}}
        </h2>
    </x-slot>

    <div class="p-6">
        <form   action="{{isset($proyecto) ? route('proyectos.update', $proyecto) : route('proyectos.store')}}" 
                method="post">
            @csrf

            @isset($proyecto)
                @method('PUT')
            @endisset
            <table>
                <thead class="bolder text-green-800 font-bold">
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Estado</th>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            @error('nombre')
                                <span class="text-red-500 text-bold"><strong>{{$message}}</strong></span>
                            @enderror
                        </td>
                        <td>
                            @error('fecha_inicio')
                                <span class="text-red-500 text-bold"><strong>{{$message}}</strong></span>
                            @enderror
                        </td>
                        <td>
                            @error('fecha_fin')
                                <span class="text-red-500 text-bold"><strong>{{$message}}</strong></span>
                            @enderror
                        </td>
                        <td>
                            @error('estado')
                                <span class="text-red-500 text-bold"><strong>{{$message}}</strong></span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="text" name="nombre" id="nombre" 
                                    value="{{old('nombre', $proyecto->nombre?? '' )}}" 
                                    class="border rounded px-3 py-2 text-green-800"></td>
                        <td>
                            <input  type="date" name="fecha_inicio" id="fecha_inicio" 
                                    value="{{old('fecha_inicio', $proyecto->fecha_inicio?? '')}}" 
                                    class="border rounded px-3 py-2 text-green-800"></td>
                        <td>
                            <input  type="date" name="fecha_fin" id="fecha_fin" 
                                    value="{{old('fecha_fin', $proyecto->fecha_fin?? '')}}" 
                                    class="border rounded px-3 py-2 text-green-800"></td>
                        <td>
                            <select name="estado" id="estado" class="rounded text-green-800">
                            @foreach ($estados as $estado)
                                <option value="{{$estado->value}}" 
                                    {{(isset($proyecto) && $proyecto->estado->value == $estado->value) ? 'SELECTED' : '' }}>
                                    {{$estado->name}}
                                </option>
                            @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="py-3">
                @empty($noMostrarBoton)
                <input  type="submit" onclick="return confirm('desea continuar el proceso')" 
                        value="Grabar" class="rounded py-2 px-2 bg-green-600 text-white font-bold">
                @endempty
            </div>
            
        </form>
    </div>
</x-app-layout>