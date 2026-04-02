<x-app-layout>
    <x-slot name="header">
    <h2 class="font-bold text-green-800 text-center text-xl">
        {{isset($material) ? 'Editar Material' : 'Datos del Material'}}
    </h2>
    </x-slot>
    <div class="p-6">
        <form   method="post"
                action="{{isset($material) ? route('materials.update', $material) : route('materials.store')}}" >

            @csrf
            @isset($material)
                @method('PUT')
            @endisset
            <table>
                <thead class="text-green-800 font-bold">
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Fecha Ingreso</th>
                    <th>Fecha Caducidad</th>
                    <th>Estado</th>
                    <th>Proveedor</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-red-500 font-bold">
                            @error('nombre') 
                                {{$message}} 
                            @enderror</td>
                        <td class="text-red-500 font-bold">
                            @error('cantidad')
                                {{$message}}
                            @enderror
                        </td>
                        <td class="text-red-500 font-bold">
                            @error('fecha_ingreso')
                                {{$message}}
                            @enderror
                        </td>
                        <td class="text-red-500 font-bold">
                            @error('fecha_caducidad')
                                {{$message}}
                            @enderror
                        </td>
                        <td class="text-red-500 font-bold">
                            @error('estado')
                                {{$message}}
                            @enderror
                        </td>
                        <td class="text-red-500 font-bold">
                            @error('proveedor')
                                {{$message}}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input  type="text" name="nombre" id="nombre" 
                                    class="rounded border-green-800 text-green-800"
                                    value="{{old('nombre', $material->nombre ?? '')}}">
                        </td>
                        <td>
                            <input  type="text" name="cantidad" id="cantidad" 
                                    class="rounded border-green-800 text-green-800"
                                    value="{{old('cantidad', $material->cantidad ?? '')}}">
                        </td>
                        <td>
                            <input  type="date" name="fecha_ingreso" id="fecha_ingreso" 
                                    class="rounded border-green-800 text-green-800"
                                    value="{{old('fecha_ingreso', $material->fecha_ingreso ?? '')}}">
                        </td>
                        <td>
                            <input  type="date" name="fecha_caducidad" id="fecha_caducidad" 
                                    class="rounded border-green-800 text-green-800"
                                    value="{{old('fecha_caducidad', $material->fecha_caducidad ?? '')}}">
                        </td>
                        <td>
                            <select name="estado" id="estado" class="rounded border-green-800 text-green-800">
                                @foreach($estados as $estado)
                                <option value="{{$estado->value}}" 
                                    {{(isset($material) && $material->estado == $estado->value) ? 'SELECTED': ''}}>
                                    {{$estado->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="proveedor" id="proveedor" 
                                    class="rounded border-green-800 text-green-800">
                                @foreach($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}"
                                            {{old('proveedor', $proveedor->estado->value ?? '') == $materiales->id_proveedor ? 'SELECTED' : ''}}>
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table> 
            
            @empty($noMostrarBoton)
            <div class="py-3">
                <input type="submit" value="Grabar" class="rounded py-2 px-8 bg-green-600 text-white font-bold">
            </div>
            @endempty
        </form>

    </div>
</x-app-layout>