@extends('layouts.app')

<div class="container">
    <div class="row mt-3">
        <a href="{{ route('clientes.create') }}">Nuevo cliente</a>
    </div>
    <div class="row mt-3">
        <table>
            <thead>
                <th>
                    Nombre
                </th>
                <th>
                    Email
                </th>
                <th>
                    esAdmin
                </th>
                <th>
                    
                </th>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                        <td>
                            {{ $cliente->nombre }}
                        </td>
                        <td>
                            {{ $cliente->email }}
                        </td>
                        <td>
                            {{ $cliente->esadmin ? 'OK' : '' }}
                        </td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente) }}">Mostrar</a>
                            <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                        
                            <form action="{{ route('clientes.destroy', $cliente) }}"
                                method="POST"
                                style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-primary"
                                    onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


{{ $clientes->links('pagination::bootstrap-5') }}
