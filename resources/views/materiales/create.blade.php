<x-app-layout>
    <x-slot name="header">
    <h2>
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
                    <th>nombre</th>
                    <th>cantidad</th>
                    <th>fecha_ingreso</th>
                    <th>fecha_caducidad</th>
                    <th>id_proveedor</th>
                </thead>
                <tbody>
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
                            <select name="id_proveedor" id="id_proveedor" 
                                    class="rounded border-green-800 text-green-800">
                                <option value="1">proveedor1</option>
                                <option value="2">proveedor2</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table> 
            
            @empty($noMostrarBoton)
            <div class="py-3">
                <input type="submit" value="Grabar" class="rounded py-2 px-2 bg-green-800 text-white font-bold">
            </div>
            @endempty
        </form>

    </div>
</x-app-layout>